<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  /**
  * 
  */
  class ListUser extends CI_Controller
  {

    function __construct()
    {
      # code...
      parent::__construct();
      $this->load->model('User_m');
    }

    function index(){
      $data = new stdClass();

      $data->users = $this->User_m->gets();

      $this->load->view('user/vListUser', $data);
    }
  }