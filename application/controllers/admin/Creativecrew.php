<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Creativecrew extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Modelcreativecrew');
        if (empty($this->session->userdata('username'))) {
            redirect('admin/auth');
        }
    }

    public function index()
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'role' => $this->session->userdata('role'),
            'page_title' => 'Creative Crew Management',
            'datacreativecrew' => $this->Modelcreativecrew->get_data_creativecrew()
        ];

        $this->template->load('layoutadmin/layout_admin', 'contentadmin/creativecrew/main', $data);
    }

    public function addCreativecrew()
    {
        $validation_rules = [
            [
                'field' => 'photo',
                'label' => 'Photo',
                'rules' => 'callback_photo_upload'
            ],
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'departement',
                'label' => 'Departement',
                'rules' => 'required'
            ]
        ];

        $data = [
            'username' => $this->session->userdata('username'),
            'role' => $this->session->userdata('role'),
            'page_title' => 'Page Add Creative Crew'
        ];

        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() == false) {
            $this->template->load('layoutadmin/layout_admin', 'contentadmin/creativecrew/add', $data);
        } else {
            $data = [
                'name' => $this->input->post('name', TRUE),
                'departement' => $this->input->post('departement', TRUE)
            ];

            $config['upload_path'] = './assets/images/admin/creativecrew/';
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

            if ($this->Modelcreativecrew->add_creativecrew($data)) {
                $this->session->set_flashdata(
                    'message',
                    'Success Add Creative Crew Data'
                );

                redirect('admin/creativecrew');
            }
        }
    }

    public function editCreativecrew($id = null)
    {
        $checkId = $this->Modelcreativecrew->getCreativecrewById($id);

        $validation_rules = [
            [
                'field' => 'photo',
                'label' => 'Photo',
                'rules' => 'callback_photo_upload'
            ],
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'departement',
                'label' => 'Departement',
                'rules' => 'required'
            ]
        ];

        if ($checkId) {
            $data = [
                'username' => $this->session->userdata('username'),
                'role' => $this->session->userdata('role'),
                'page_title' => 'Page Edit Creative Crew',
                'creativecrewDetail' => $checkId
            ];

            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() == false) {
                $this->template->load('layoutadmin/layout_admin', 'contentadmin/creativecrew/edit', $data);
            } else {
                $data = [
                    'name' => $this->input->post('name', TRUE),
                    'departement' => $this->input->post('departement', TRUE)
                ];

                $config['upload_path'] = './assets/images/admin/creativecrew/';
                $config['allowed_types'] = '*';
                $this->load->library('upload', $config, 'fotoUpload');
                $this->fotoUpload->initialize($config);

                if ($_FILES['photo']['name']) {
                    if ($this->fotoUpload->do_upload('photo')) {
                        $fotoName = $this->fotoUpload->data('file_name');
                        $fotoNameOld = $checkId->photo;

                        unlink(FCPATH . './assets/images/admin/creativecrew/' . $fotoNameOld);

                        $data += [
                            'photo' => $fotoName
                        ];
                    }
                }

                $this->Modelcreativecrew->edit_creativecrew($data, $id);

                $this->session->set_flashdata(
                    'message',
                    'Success Edit Creative Crew Data'
                );

                redirect('admin/creativecrew');
            }
        }
    }

    public function deleteCreativecrew($id = null)
    {
        $checkId = $this->Modelcreativecrew->getCreativecrewById($id);

        if ($checkId) {
            $this->Modelcreativecrew->delete_creativecrew($id);

            $this->session->set_flashdata(
                'message',
                'Success Delete Creative Crew Data'
            );

            redirect('admin/creativecrew');
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
            } else if ($_FILES['photo']['size'] > 10000000) {
                $this->form_validation->set_message('photo_upload', 'Size photo max 2mb');
                return false;
            }
        }
    }

    public function getFile($type, $id = null)
    {
        if ($id) {
            $creativecrew = $this->Modelcreativecrew->getCreativecrewById($id);
        } else {
            $creativecrew = 'Not Found';
        }

        if ($type == 'photo') {
            $file = $creativecrew->photo;
            redirect(base_url() . 'assets/images/admin/creativecrew/' . $file);
        } else {
            'File Not Found';
        }
    }
}