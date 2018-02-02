<?php 
defined('BASEPATH') or exit('no direct script access');

	/**
	* 
	*/
	class Register extends CI_Controller
	{
		public function __construct() {
			parent::__construct();
			$this->load->model('User_m');
		}

		public function index()
		{
			# code...
			$value = array(
			'username' => $this->input->post('username'),
			'fullname' => $this->input->post('fullname'),
			'password' => md5($this->input->post('password')),
			'level' => '5'

		);

		if($this->User_m->add_user($value)){
			redirect(base_url('Login'));
		}
			$this->load->view('vRegister');
		}

	}	
	?>