<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        $this->load->model('Modelevent');
        if (empty($this->session->userdata('username'))) {
            redirect('admin/auth');
        }
    }

	public function index()
	{
		$data = [
			'username'   => $this->session->userdata('username'),
        	'role'       => $this->session->userdata('role'),
			'page_title' => 'Event Management',
			'dataevent' => $this->Modelevent->get_data_event()
		];
		
        $this->template->load('layoutadmin/layout_admin', 'contentadmin/event/main', $data);
	}

	public function addEvent()
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
            'field' => 'time',
            'label' => 'Time',
            'rules' => 'required'
		],
		[
            'field' => 'location',
            'label' => 'Location',
            'rules' => 'required'
		],
		[
            'field' => 'price',
            'label' => 'Price',
            'rules' => 'required'
        ],
        [
            'field' => 'contributor',
            'label' => 'Contributor',
            'rules' => 'required'
		],
        [
            'field' => 'link',
            'label' => 'Link',
            'rules' => 'required'
		]
    ];

    $data = [
		'username'    => $this->session->userdata('username'),
        'role'        => $this->session->userdata('role'),
        'page_title'  => 'Page Add Event',
    ];

    $this->form_validation->set_rules($validation_rules);

    if ($this->form_validation->run() == false) {
        $this->template->load('layoutadmin/layout_admin', 'contentadmin/event/add', $data);
    } else {
        $data = [
                'title'        => $this->input->post('title', TRUE),
                'time'         => $this->input->post('time', TRUE),
				'location'     => $this->input->post('location', TRUE),
				'price'        => $this->input->post('price', TRUE),
                'contributor'  => $this->input->post('contributor', TRUE),
                'link'         => $this->input->post('link', TRUE)
        ];

        $config['upload_path']          = './assets/images/admin/event/';
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

        if ($this->Modelevent->add_event($data)){
            $this->session->set_flashdata(
                'message',
                'Success Add Event Data'
            );
    
            redirect('admin/event');
        }
    }
  }

  public function editEvent($id = null)
{
    $checkId = $this->Modelevent->getEventById($id);

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
            'field' => 'time',
            'label' => 'Title',
            'rules' => 'required'
		],
		[
            'field' => 'location',
            'label' => 'Location',
            'rules' => 'required'
		],
		[
            'field' => 'price',
            'label' => 'Price',
            'rules' => 'required'
        ],
        [
            'field' => 'contributor',
            'label' => 'Contributor',
            'rules' => 'required'
		],
        [
            'field' => 'link',
            'label' => 'Link',
            'rules' => 'required'
		]
    ];

    if ($checkId) {
    $data = [
        'username'    => $this->session->userdata('username'),
        'role'        => $this->session->userdata('role'),
        'page_title'  => 'Page Edit Event',
        'eventDetail' => $checkId
    ];

    $this->form_validation->set_rules($validation_rules);

    if ($this->form_validation->run() == false) {
        $this->template->load('layoutadmin/layout_admin', 'contentadmin/event/edit', $data);
    } else {
        $data = [
            'title'        => $this->input->post('title', TRUE),
            'time'         => $this->input->post('time', TRUE),
            'location'     => $this->input->post('location', TRUE),
            'price'        => $this->input->post('price', TRUE),
            'contributor'  => $this->input->post('contributor', TRUE),
            'link'         => $this->input->post('link', TRUE)
        ];

                    $config['upload_path']          = './assets/images/admin/event/';
                    $config['allowed_types']        = '*';
                    $this->load->library('upload', $config, 'fotoUpload');
                    $this->fotoUpload->initialize($config);
        
                    if ($_FILES['photo']['name']) {
                        if ($this->fotoUpload->do_upload('photo')) {
                            $fotoName = $this->fotoUpload->data('file_name');
                            $fotoNameOld = $checkId->photo;
        
                            unlink(FCPATH . './assets/images/admin/event/' . $fotoNameOld);
        
                            $data += [
                                'photo' => $fotoName
                            ];
                        }
                    }

        $this->Modelevent->edit_event($data, $id);

        $this->session->set_flashdata(
            'message',
            'Success Edit Event Data'
        );

        redirect('admin/event');
     }
   }
}

    public function deleteEvent($id = null)
{
    $checkId = $this->Modelevent->getEventById($id);

    if ($checkId) {
        $this->Modelevent->delete_event($id);

        $this->session->set_flashdata(
            'message',
            'Success Delete Event Data'
        );

        redirect('admin/event');
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
          $event = $this->Modelevent->getEventById($id);
      } else {
          $event = 'Not Found';
      }

      if ($type == 'photo') {
          $file = $event->photo;
          redirect(base_url() . 'assets/images/admin/event/' . $file);
      } else{
          'File Not Found';
      }
  }
}