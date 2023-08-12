<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimony extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        $this->load->model('Modeltestimony');
        if (empty($this->session->userdata('username'))) {
            redirect('admin/auth');
        }
    }

	public function index()
	{
		$data = [
			'username'   => $this->session->userdata('username'),
        	'role'       => $this->session->userdata('role'),
			'page_title' => 'Testimony Management',
			'datatestimony' => $this->Modeltestimony->get_data_testimony()
		];
		
        $this->template->load('layoutadmin/layout_admin', 'contentadmin/testimony/main', $data);
	}

	public function addTestimony()
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
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'required'
        ]
    ];

    $data = [
		'username'      => $this->session->userdata('username'),
        'role'          => $this->session->userdata('role'),
        'page_title'    => 'Page Add Testimony',
    ];

    $this->form_validation->set_rules($validation_rules);

    if ($this->form_validation->run() == false) {
        $this->template->load('layoutadmin/layout_admin', 'contentadmin/testimony/add', $data);
    } else {
        $data = [
                'name' 		  => $this->input->post('name', TRUE),
                'description' => $this->input->post('description', TRUE)
        ];

        $config['upload_path']          = './assets/images/admin/testimony/';
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

        if ($this->Modeltestimony->add_testimony($data)){
            $this->session->set_flashdata(
                'message',
                'Success Add Testimony Data'
            );
    
            redirect('admin/testimony');
        }
    }
  }

  public function editTestimony($id = null)
{
    $checkId = $this->Modeltestimony->getTestimonyById($id);

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
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'required'
        ]
    ];

    if ($checkId) {
    $data = [
        'username'        => $this->session->userdata('username'),
        'role'            => $this->session->userdata('role'),
        'page_title'      => 'Page Edit Testimony',
        'testimonyDetail' => $checkId
    ];

    $this->form_validation->set_rules($validation_rules);

    if ($this->form_validation->run() == false) {
        $this->template->load('layoutadmin/layout_admin', 'contentadmin/testimony/edit', $data);
    } else {
        $data = [
            'name' 		  => $this->input->post('name', TRUE),
            'description' => $this->input->post('description', TRUE)
        ];

                    $config['upload_path']          = './assets/images/admin/testimony/';
                    $config['allowed_types']        = '*';
                    $this->load->library('upload', $config, 'fotoUpload');
                    $this->fotoUpload->initialize($config);
        
                    if ($_FILES['photo']['name']) {
                        if ($this->fotoUpload->do_upload('photo')) {
                            $fotoName = $this->fotoUpload->data('file_name');
                            $fotoNameOld = $checkId->photo;
        
                            unlink(FCPATH . './assets/images/admin/testimony/' . $fotoNameOld);
        
                            $data += [
                                'photo' => $fotoName
                            ];
                        }
                    }

        $this->Modeltestimony->edit_testimony($data, $id);

        $this->session->set_flashdata(
            'message',
            'Success Edit Testimony Data'
        );

        redirect('admin/testimony');
     }
   }
}

    public function deleteTestimony($id = null)
{
    $checkId = $this->Modeltestimony->getTestimonyById($id);

    if ($checkId) {
        $this->Modeltestimony->delete_testimony($id);

        $this->session->set_flashdata(
            'message',
            'Success Delete Testimony Data'
        );

        redirect('admin/testimony');
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
          $testimony = $this->Modeltestimony->getTestimonyById($id);
      } else {
          $testimony = 'Not Found';
      }

      if ($type == 'photo') {
          $file = $testimony->photo;
          redirect(base_url() . 'assets/images/admin/testimony/' . $file);
      } else{
          'File Not Found';
      }
  }
}