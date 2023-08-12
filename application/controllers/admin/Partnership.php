<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partnership extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        $this->load->model('Modelpartnership');
        if (empty($this->session->userdata('username'))) {
            redirect('admin/auth');
        }
    }

	public function index()
	{
		$data = [
			'username'        => $this->session->userdata('username'),
            'role'            => $this->session->userdata('role'),
			'page_title' 	  => 'Partnership Management',
			'datapartnership' => $this->Modelpartnership->get_data_partnership()
		];
		
        $this->template->load('layoutadmin/layout_admin', 'contentadmin/partnership/main', $data);
	}

	public function addPartnership()
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
        'page_title' => 'Page Add Partnership'
    ];

    $this->form_validation->set_rules($validation_rules);

    if ($this->form_validation->run() == false) {
        $this->template->load('layoutadmin/layout_admin', 'contentadmin/partnership/add', $data);
    } else {
        $data = [
                'name' 		  => $this->input->post('name', TRUE),
                'departement' => $this->input->post('departement', TRUE)
        ];

        $config['upload_path']          = './assets/images/admin/partnership/';
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

        if ($this->Modelpartnership->add_partnership($data)){
            $this->session->set_flashdata(
                'message',
                'Success Add Partnership Data'
            );
    
            redirect('admin/partnership');
        }
    }
  }

  public function editPartnership($id = null)
{
    $checkId = $this->Modelpartnership->getPartnershipById($id);

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
        'username'           => $this->session->userdata('username'),
        'role'               => $this->session->userdata('role'),
        'page_title'         => 'Page Edit Partnership',
        'partnershipDetail' => $checkId
    ];

    $this->form_validation->set_rules($validation_rules);

    if ($this->form_validation->run() == false) {
        $this->template->load('layoutadmin/layout_admin', 'contentadmin/partnership/edit', $data);
    } else {
        $data = [
            'name' 		  => $this->input->post('name', TRUE),
            'departement' => $this->input->post('departement', TRUE)
        ];

                    $config['upload_path']          = './assets/images/admin/partnership/';
                    $config['allowed_types']        = '*';
                    $this->load->library('upload', $config, 'fotoUpload');
                    $this->fotoUpload->initialize($config);
        
                    if ($_FILES['photo']['name']) {
                        if ($this->fotoUpload->do_upload('photo')) {
                            $fotoName = $this->fotoUpload->data('file_name');
                            $fotoNameOld = $checkId->photo;
        
                            unlink(FCPATH . './assets/images/admin/partnership/' . $fotoNameOld);
        
                            $data += [
                                'photo' => $fotoName
                            ];
                        }
                    }

        $this->Modelpartnership->edit_partnership($data, $id);

        $this->session->set_flashdata(
            'message',
            'Success Edit Partnership Data'
        );

        redirect('admin/partnership');
     }
   }
}

    public function deletePartnership($id = null)
{
    $checkId = $this->Modelpartnership->getPartnershipById($id);

    if ($checkId) {
        $this->Modelpartnership->delete_partnership($id);

        $this->session->set_flashdata(
            'message',
            'Success Delete Partnership Data'
        );

        redirect('admin/partnership');
    }
}

  public function photo_upload()
  {
      $allowed_mime_type_arr = ['image/jpeg', 'image/jpg'];
      $mime = get_mime_by_extension($_FILES['photo']['name']);
      if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != "") {
          if (!in_array($mime, $allowed_mime_type_arr)) {
              $this->form_validation->set_message('photo_upload', 'Upload photo with format jpeg or jpg');
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
          $partnership = $this->Modelpartnership->getPartnershipById($id);
      } else {
          $partnership = 'Not Found';
      }

      if ($type == 'photo') {
          $file = $partnership->photo;
          redirect(base_url() . 'assets/images/admin/partnership/' . $file);
      } else{
          'File Not Found';
      }
  }
}