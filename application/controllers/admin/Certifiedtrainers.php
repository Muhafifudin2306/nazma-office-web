<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Certifiedtrainers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Modelcertifiedtrainers');
        if (empty($this->session->userdata('username'))) {
            redirect('admin/auth');
        }
    }

    public function index()
    {
        $data = [
            'username'              => $this->session->userdata('username'),
            'role'                  => $this->session->userdata('role'),
            'page_title'            => 'Certified Trainers Management',
            'datacertifiedtrainers' =>  $this->Modelcertifiedtrainers->get_data_certifiedtrainers()
        ];

        $this->template->load('layoutadmin/layout_admin', 'contentadmin/certifiedtrainers/main', $data);
    }

    public function addCertifiedtrainers()
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
            'username'   => $this->session->userdata('username'),
            'role'       => $this->session->userdata('role'),
            'page_title' => 'Page Add Certified Trainers'
        ];

        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run() == false) {
            $this->template->load('layoutadmin/layout_admin', 'contentadmin/certifiedtrainers/add', $data);
        } else {
            $data = [
                'name'           => $this->input->post('name', TRUE),
                'departement' => $this->input->post('departement', TRUE)
            ];

            $config['upload_path']          = './assets/images/admin/certifiedtrainers/';
            $config['allowed_types']        = '*';
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

            if ($this->Modelcertifiedtrainers->add_certifiedtrainers($data)) {
                $this->session->set_flashdata(
                    'message',
                    'Success Add Certified Trainers Data'
                );

                redirect('admin/certifiedtrainers');
            }
        }
    }

    public function editCertifiedtrainers($id = null)
    {
        $checkId = $this->Modelcertifiedtrainers->getCertifiedtrainersById($id);

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
                'username'                => $this->session->userdata('username'),
                'role'                    => $this->session->userdata('role'),
                'page_title'              => 'Page Edit Certified Trainers',
                'certifiedtrainersDetail' => $checkId
            ];

            $this->form_validation->set_rules($validation_rules);

            if ($this->form_validation->run() == false) {
                $this->template->load('layoutadmin/layout_admin', 'contentadmin/certifiedtrainers/edit', $data);
            } else {
                $data = [
                    'name'           => $this->input->post('name', TRUE),
                    'departement' => $this->input->post('departement', TRUE)
                ];

                $config['upload_path']          = './assets/images/admin/certifiedtrainers/';
                $config['allowed_types']        = '*';
                $this->load->library('upload', $config, 'fotoUpload');
                $this->fotoUpload->initialize($config);

                if ($_FILES['photo']['name']) {
                    if ($this->fotoUpload->do_upload('photo')) {
                        $fotoName = $this->fotoUpload->data('file_name');
                        $fotoNameOld = $checkId->photo;

                        unlink(FCPATH . './assets/images/admin/certifiedtrainers/' . $fotoNameOld);

                        $data += [
                            'photo' => $fotoName
                        ];
                    }
                }

                $this->Modelcertifiedtrainers->edit_certifiedtrainers($data, $id);

                $this->session->set_flashdata(
                    'message',
                    'Success Edit Certified Trainers Data'
                );

                redirect('admin/certifiedtrainers');
            }
        }
    }

    public function deleteCertifiedtrainers($id = null)
    {
        $checkId = $this->Modelcertifiedtrainers->getCertifiedtrainersById($id);

        if ($checkId) {
            $this->Modelcertifiedtrainers->delete_certifiedtrainers($id);

            $this->session->set_flashdata(
                'message',
                'Success Delete Certified Trainers Data'
            );

            redirect('admin/certifiedtrainers');
        }
    }

    public function photo_upload()
    {
        $allowed_mime_type_arr = ['image/jpeg', 'image/jpg', 'image/png'];
        $mime = get_mime_by_extension($_FILES['photo']['name']);
        if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != "") {
            if (!in_array($mime, $allowed_mime_type_arr)) {
                $this->form_validation->set_message('photo_upload', 'Upload photo with format jpeg or jpg');
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
            $certifiedtrainers = $this->Modelcertifiedtrainers->getCertifiedtrainersById($id);
        } else {
            $certifiedtrainers = 'Not Found';
        }

        if ($type == 'photo') {
            $file = $certifiedtrainers->photo;
            redirect(base_url() . 'assets/images/admin/certifiedtrainers/' . $file);
        } else {
            'File Not Found';
        }
    }
}
