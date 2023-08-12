<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Modelblog');
        if (empty($this->session->userdata('username'))) {
            redirect('admin/auth');
        }
    }

    public function index()
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'role' => $this->session->userdata('role'),
            'page_title' => 'Blog Management',
            'datablog' => $this->Modelblog->get_data_blog()
        ];

        $this->template->load('layoutadmin/layout_admin', 'contentadmin/blog/main', $data);
    }

    public function addBlog()
    {
        $validation_rules = [
            [
                'field' => 'photo',
                'label' => 'Photo',
                'rules' => 'callback_photo_upload'
            ],
            [
                'field' => 'date',
                'label' => 'Date',
                'rules' => 'required'
            ],
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'content',
                'label' => 'Content',
                'rules' => 'required'
            ],
            [
                'field' => 'tag',
                'label' => 'Tag',
                'rules' => 'required'
            ]
        ];

        $data = [
            'username' => $this->session->userdata('username'),
            'role' => $this->session->userdata('role'),
            'page_title' => 'Page Add Blog',
        ];

        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() == false) {
            $this->template->load('layoutadmin/layout_admin', 'contentadmin/blog/add', $data);
        } else {
            $data = [
                'date' => $this->input->post('date', TRUE),
                'slug' => url_title($this->input->post('title'), 'dash', TRUE),
                'title' => $this->input->post('title', TRUE),
                'content' => $this->input->post('content', TRUE),
                'tag' => $this->input->post('tag', TRUE)
            ];

            $config['upload_path'] = './assets/images/admin/blog/';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config, 'fotoUpload');
            $this->fotoUpload->initialize($config);

            if ($_FILES['photo']['name']) {
                if ($this->fotoUpload->do_upload('photo')) {
                    $fotoName = $this->fotoUpload->data('file_name');

                    $data += [
                        'photo' => $fotoName
                    ];
                }
            }

            if ($this->Modelblog->add_blog($data)) {
                $this->session->set_flashdata(
                    'message',
                    'Success Add Blog Data'
                );

                redirect('admin/blog');
            }
        }
    }

    public function editBlog($slug = null)
    {
        $checkSlug = $this->Modelblog->getBlogBySlug($slug);

        $validation_rules = [
            [
                'field' => 'photo',
                'label' => 'Photo',
                'rules' => 'callback_photo_upload'
            ],
            [
                'field' => 'date',
                'label' => 'Date',
                'rules' => 'required'
            ],
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'content',
                'label' => 'Content',
                'rules' => 'required'
            ],
            [
                'field' => 'tag',
                'label' => 'Tag',
                'rules' => 'required'
            ]
        ];

        if ($checkSlug) {
            $data = [
                'username' => $this->session->userdata('username'),
                'role' => $this->session->userdata('role'),
                'page_title' => 'Page Edit Blog',
                'blogDetail' => $checkSlug
            ];

            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() == false) {
                $this->template->load('layoutadmin/layout_admin', 'contentadmin/blog/edit', $data);
            } else {
                $data = [
                    'date' => $this->input->post('date', TRUE),
                    'slug' => url_title($this->input->post('title'), 'dash', TRUE),
                    'title' => $this->input->post('title', TRUE),
                    'content' => $this->input->post('content', TRUE),
                    'tag' => $this->input->post('tag', TRUE)
                ];

                $config['upload_path'] = './assets/images/admin/blog/';
                $config['allowed_types'] = '*';
                $this->load->library('upload', $config, 'fotoUpload');
                $this->fotoUpload->initialize($config);

                if ($_FILES['photo']['name']) {
                    if ($this->fotoUpload->do_upload('photo')) {
                        $fotoName = $this->fotoUpload->data('file_name');
                        $fotoNameOld = $checkSlug->photo;

                        unlink(FCPATH . './assets/images/admin/blog/' . $fotoNameOld);

                        $data += [
                            'photo' => $fotoName
                        ];
                    }
                }

                $this->Modelblog->edit_blog($data, $slug);

                $this->session->set_flashdata(
                    'message',
                    'Success Edit Blog Data'
                );

                redirect('admin/blog');
            }
        }
    }

    public function deleteBlog($slug = null)
    {
        $checkSlug = $this->Modelblog->getBlogBySlug($slug);

        if ($checkSlug) {
            $this->Modelblog->delete_blog($slug);

            $this->session->set_flashdata(
                'message',
                'Success Delete Blog Data'
            );

            redirect('admin/blog');
        }
    }

    public function photo_upload()
    {
        $allowed_mime_type_arr = ['image/jpeg', 'image/jpg', 'image/png'];
        $mime = get_mime_by_extension($_FILES['photo']['name']);
        if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != "") {
            if (!in_array($mime, $allowed_mime_type_arr)) {
                $this->form_validation->set_message('photo_upload', 'Upload photo with format png, jpeg, or jpg');
                return false;
            } else if ($_FILES['photo']['size'] > 2000000) {
                $this->form_validation->set_message('photo_upload', 'Size photo max 2mb');
                return false;
            }
        }
    }



    public function getFile($type, $slug = null)
    {
        if ($slug) {
            $blog = $this->Modelblog->getBlogBySlug($slug);
        } else {
            $blog = 'Not Found';
        }

        if ($type == 'photo') {
            $file = $blog->photo;
            redirect(base_url() . 'assets/images/admin/blog/' . $file);
        } else {
            'File Not Found';
        }
    }
}