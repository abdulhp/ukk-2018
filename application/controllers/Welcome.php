<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('User_m');
	}
	public function index()
	{
		
		$data = new stdClass();

		$data->users = $this->User_m->gets();
		$this->load->view('landing', $data);

	}

	function add(){

		$value = array(
			'username' => $this->input->post('username'),
			'fullname' => $this->input->post('fullname'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level')
		);

		if($this->User_m->add_user($value)){
			redirect(base_url('welcome'));
		}

	}

	function delete($id){
		$res = $this->User_m->delete_user($id);
		if ($res) {
			# code...
			redirect(base_url('welcome'));
		}
	}

	function edit($id){
		
	}

}
