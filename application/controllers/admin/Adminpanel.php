<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Modeltotaldata');
        if (empty($this->session->userdata('username'))) {
            redirect('admin/auth');
        }
    }

    public function index()
    {
		$data = [
            'username'               => $this->session->userdata('username'),
            'role'                   => $this->session->userdata('role'),
			'page_title'             => 'Dashboard Adminpanel',
            'totalproject'           =>  $this->Modeltotaldata->get_total_project()->total,
            'totaltestimony'         =>  $this->Modeltotaldata->get_total_testimony()->total,
            'totalcertifiedtrainers' =>  $this->Modeltotaldata->get_total_certifiedtrainers()->total,
            'totalcreativecrew'      =>  $this->Modeltotaldata->get_total_creativecrew()->total,
            'totalpartnership'       =>  $this->Modeltotaldata->get_total_partnership()->total,
            'totalblog'              =>  $this->Modeltotaldata->get_total_blog()->total,
            'totalevent'             =>  $this->Modeltotaldata->get_total_event()->total
		];
		
        $this->template->load('layoutadmin/layout_admin', 'admin/dashboard', $data);
    }

}
?>
