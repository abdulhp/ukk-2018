<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  /**
  * 
  */
  class Homepage extends CI_Controller
  {
    
    function __construct()
    {
      # code...
      parent::__construct();
    }

    function index(){
      $this->load->view('vHomepage');
    }
  }