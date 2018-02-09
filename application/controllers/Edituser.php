<?php 
defined('BASEPATH') or exit('no direct script access');

/**
* 
*/
class EditUser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		# code...
	}

	function index($id){
		$data = new stdClass();
		$data->res = $this->User_m->get_user_by_id($id)->result();
		$this->load->view('vEditUser', $data);
	}

	function edit(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');

		$data_update = array(
			'id' => $id,
			'username' => $username,
			'fullname' => $fullname,
			'password' => $password,
			'level' => $level
		);

		$result = $this->User_m->update('user', $data_update, $id);

		if ($result==1) {
			# code...
			redirect('listuser');
		}else{
			Echo "Error";
		}

	}
}