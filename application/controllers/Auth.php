<?php

class Auth extends Ci_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model', 'Auth_model');
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == false){
		$this->load->view('view-login');
	}else{
		// validation function
		$this->_login();
	}
	}
	private function _login(){
		$userEmail = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->Auth_model->get_user($userEmail, $password);
		// jika usernya ada
		if($user) {
				$this->session->set_userdata('login', TRUE);
				redirect('Home');
				}else{

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
				redirect('Auth');
			}
		}

	public function logout(){
		$this->session->unset_userdata('login');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out</div>');
		redirect('Auth');
	}
}