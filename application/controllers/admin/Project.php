<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Modelproject');
        if (empty($this->session->userdata('username'))) {
            redirect('admin/auth');
        }
    }

    public function index()
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'role' => $this->session->userdata('role'),
            'page_title' => 'Project Management',
            'dataproject' => $this->Modelproject->get_data_project()
        ];

        $this->template->load('layoutadmin/layout_admin', 'contentadmin/project/main', $data);
    }

    public function addProject()
    {
        $validation_rules = [
            [
                'field' => 'photo',
                'label' => 'Photo',
                'rules' => 'callback_photo_upload'
            ],
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ],
            [
                'field' => 'date',
                'label' => 'Date',
                'rules' => 'required'
            ],
            [
                'field' => 'location',
                'label' => 'Location',
                'rules' => 'required'
            ]
        ];

        $data = [
            'username' => $this->session->userdata('username'),
            'role' => $this->session->userdata('role'),
            'page_title' => 'Page Add Project',
        ];

        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() == false) {
            $this->template->load('layoutadmin/layout_admin', 'contentadmin/project/add', $data);
        } else {
            $data = [
                'title' => $this->input->post('title', TRUE),
                'description' => $this->input->post('description', TRUE),
                'date' => $this->input->post('date', TRUE),
                'location' => $this->input->post('location', TRUE)
            ];

            $config['upload_path'] = './assets/images/admin/project/';
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

            if ($this->Modelproject->add_project($data)) {
                $this->session->set_flashdata(
                    'message',
                    'Success Add Project Data'
                );

                redirect('admin/project');
            }
        }
    }

    public function editProject($id = null)
    {
        $checkId = $this->Modelproject->getProjectById($id);

        $validation_rules = [
            [
                'field' => 'photo',
                'label' => 'Photo',
                'rules' => 'callback_photo_upload'
            ],
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ],
            [
                'field' => 'date',
                'label' => 'Date',
                'rules' => 'required'
            ],
            [
                'field' => 'location',
                'label' => 'Location',
                'rules' => 'required'
            ]
        ];

        if ($checkId) {
            $data = [
                'username' => $this->session->userdata('username'),
                'role' => $this->session->userdata('role'),
                'page_title' => 'Page Edit Project',
                'projectDetail' => $checkId
            ];

            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() == false) {
                $this->template->load('layoutadmin/layout_admin', 'contentadmin/project/edit', $data);
            } else {
                $data = [
                    'title' => $this->input->post('title', TRUE),
                    'description' => $this->input->post('description', TRUE),
                    'date' => $this->input->post('date', TRUE),
                    'location' => $this->input->post('location', TRUE)
                ];

                $config['upload_path'] = './assets/images/admin/project/';
                $config['allowed_types'] = '*';
                $this->load->library('upload', $config, 'fotoUpload');
                $this->fotoUpload->initialize($config);

                if ($_FILES['photo']['name']) {
                    if ($this->fotoUpload->do_upload('photo')) {
                        $fotoName = $this->fotoUpload->data('file_name');
                        $fotoNameOld = $checkId->photo;

                        unlink(FCPATH . './assets/images/admin/project/' . $fotoNameOld);

                        $data += [
                            'photo' => $fotoName
                        ];
                    }
                }

                $this->Modelproject->edit_project($data, $id);

                $this->session->set_flashdata(
                    'message',
                    'Success Edit Project Data'
                );

                redirect('admin/project');
            }
        }
    }

    public function deleteProject($id = null)
    {
        $checkId = $this->Modelproject->getProjectById($id);

        if ($checkId) {
            $this->Modelproject->delete_project($id);

            $this->session->set_flashdata(
                'message',
                'Success Delete Project Data'
            );

            redirect('admin/project');
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

    public function getFile($type, $id = null)
    {
        if ($id) {
            $project = $this->Modelproject->getProjectById($id);
        } else {
            $project = 'Not Found';
        }

        if ($type == 'photo') {
            $file = $project->photo;
            redirect(base_url() . 'assets/images/admin/project/' . $file);
        } else {
            'File Not Found';
        }
    }
}