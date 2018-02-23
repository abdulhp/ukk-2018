<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  /**
  * 
  */
  class Guest extends CI_Controller
  {

    function __construct()
    {
      # code...
      parent::__construct();
      
      $this->load->model('Main_m');
    }

    function index(){
      $data = new stdClass();
      $data->rute = $this->Main_m->gets()->result();

      $this->load->view('guest/index', $data);
    }

    function search(){
      $data = new stdClass();

      $from = $this->input->post('from');
      $to = $this->input->post('to');
      $departat = $this->input->post('departat');

      $data->rute = $this->Main_m->gets_by_condition('rute', array('rute_from' => $from, 'rute_to' => $to))->result();

      $this->load->view('guest/searchresult', $data);
    }

    function pesan(){
    
    }
  }
