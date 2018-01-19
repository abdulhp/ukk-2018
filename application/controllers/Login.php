<?php 
defined('BASEPATH') or exit('no direct script access');

	/**
	* 
	*/
	class Login extends CI_Controller
	{
		public function __construct() {
			parent::__construct();
			// $this->load->model('crud');
		}

		public function index()
		{
			# code...

			if ($this->input->post('submit')) {
				# code...
				$username = strip_tags($this->input->post('username'));
				$password = strip_tags(md5($this->input->post('password')));

				// echo $username.", ".$password;
				$query = $this->db->query('Select * from user where `username` = "'.$username.'";');

				foreach ($query->result() as $row) {
					# code...
					$db_username = $row->username;
					$db_password = $row->password;
				}
				
				if ($db_username = $username && $db_password = $password) {
					# code...
					redirect('welcome');
				}
				
			}

			$this->load->view('user/LoginView');
		}

	}	
	?>