<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
 {

    public function index()
    {
        $data = [
            'page_title' => 'Login Admin NaZMa Office'
        ];
        $this->load->view('admin/login_admin', $data);
    }

	public function login_action()
	{
        $this->load->model('Modeladminlogin');

		$u = $this->input->post('username');
        $p = $this->input->post('password');
          $where = array('username' => $u);
	
    $check  = $this->Modeladminlogin->check_login('admin', $where);
	$pass = $check->row();
    if($check->num_rows()==1 && password_verify($p, $pass->password) == TRUE)
        {
        $data_session = array(
            'username' => $u,
			'role'     => $pass->role,
            'status'   => 'login'
        );
        $this->session->set_userdata($data_session);
        redirect('admin/adminpanel');
        }else{
			echo '<script>alert("The username or password you entered is incorrect");window.location.href="'.site_url('admin/auth').'";</script>';
        }
    }

    public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
