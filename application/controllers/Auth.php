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
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tb_user', ['user_email' => $email])->row_array();
		$pass = $this->db->get_where('tb_user', ['user_password' => $password])->row_array();
		// jika usernya ada
		if($user) {
			if($pass){
				$data = [
				'email' => $user['user_email']
				];

				$this->session->set_userdata($data);
				redirect('Home');
			}else{

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
				redirect('Auth');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered</div>');
			redirect('Auth');
		}
	}

	public function logout(){
		$this->session->unset_userdata('email');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out</div>');
		redirect('Auth');
	}
}