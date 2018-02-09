<?php 
defined('BASEPATH') or exit('no direct script access');

	/**
	* 
	*/
	class Login extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('User_m');
		}

		function index(){

			if (!isset($_SESSION['username'])) {
				$this->load->view('vlogin');
				// echo "False";
			} else {
				// echo "True";
				redirect('homepage');
			}

		}

		public function action(){

			if ($this->input->post('submit')) {
				$username = strip_tags($this->input->post('username'));
				$password = strip_tags(md5($this->input->post('password')));
				
				$procdata = array(
					'username' => $username,
					'password' => $password
				);

				$dolog = $this->User_m->cek_login('user', $procdata);

				$userid = $dolog->row_array();

				if($dolog->num_rows() > 0){

					$data_session = array(
						'userid' => $userid['id'],
						'username' => $username,
						'status' => "login"
					);

					$this->session->set_userdata($data_session);

					redirect(base_url("homepage"));

				}else{
					echo "Username dan password salah !";
				}

			}

			

		}
		function logout(){
				$this->session->sess_destroy();
				redirect(base_url('login'));
			}
	}