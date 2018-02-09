<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /**
  * 
  */
  class InputUser extends CI_Controller
  {

    function __construct()
    {
      # code...
      parent::__construct();
      $this->load->model('User_m');
    }

    function index(){
      $this->load->view('user/vInputUser');
    }

    function add(){

      $value = array(
        'username' => $this->input->post('username'),
        'fullname' => $this->input->post('fullname'),
        'password' => md5($this->input->post('password')),
        'level' => $this->input->post('level')
      );

      if($this->User_m->add_user($value)){
        redirect('listuser');
      }

    }
  }