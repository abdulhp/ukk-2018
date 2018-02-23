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
      $this->load->model('Reserve_m');
      $this->load->model('Customer_m');
    }

    function index(){
      $this->load->view('vHomepage');
    }

    function reservation(){
      $data = new stdClass();
      $data->listreservasi = $this->Reserve_m->gets()->result();
      $this->load->view('admin/reservasi/reservasi.php',  $data);
    }

    function customer(){
      $data = new stdClass();
      $data->listcustomer = $this->Customer_m->gets()->result();
      $this->load->view('admin/customer/customer.php',  $data);
    }

  }