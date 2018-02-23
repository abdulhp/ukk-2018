<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
  /**
  * 
  */
  class Template extends CI_Controller
  {

    function __construct()
    {
      # code...
      parent::__construct();
      $this->load->model('Main_m');
      $this->load->model('Customer_m');
      $this->load->model('Reserve_m');
      $this->load->model('Rute_m');
    }

    function index(){
      $data = new stdClass();
      $data->rute = $this->Main_m->gets()->result();

      $this->load->view('template/index', $data);
    }

    function search(){
      $data = new stdClass();
      $from = $this->input->get('departure');
      $to = $this->input->get('destination');
      $departat = $this->input->get('departat');

      $rutes = $this->Main_m->cari_maskapai(array(
        'rute_from'=>$from, 
        'rute_to'=>$to, 
        'date'=>$departat
      ));

      if ($rutes->num_rows() > 0) {
        # code...
        $data->rutes = $rutes->result();
        $this->load->view('template/services', $data);
      }else{
        $this->session->set_flashdata('error', 'Maaf rute yang dipilih tidak tersedia');
        $this->index();
      }
    }

    function pesan($id_transport, $id_rute){
      $data = new stdClass();

      $data->id_transport = $id_transport;
      $data->id_rute = $id_rute;

      $data->seat = $this->Main_m->gets_by_condition2('seat_qty', 'transportation', array('id'=>$id_transport))->result();
      $this->load->view('template/pesan', $data);
    }

    function reservasi(){
      $id_transport = $this->input->post('idtransport');
      $id_rute = $this->input->post('idrute');

      $name = $this->input->post('nama');
      $address = $this->input->post('address');
      $email = $this->input->post('email');
      $phone = $this->input->post('phone');
      $gender = $this->input->post('gender');
      $seat = $this->input->post('seat');

      $reservdate = date('Y-m-d');
      $reservcode = rand();
      $reservat = $this->Rute_m->get_by_id($id_rute)->row_array();

      $departat = $this->Rute_m->get_by_conditions('depart_at', array('id'=>$id_rute))->row_array();
      $price = $this->Rute_m->get_by_conditions('price', array('id'=>$id_rute))->row_array();

      // var_dump($reservat['date'], $departat['depart_at'], $price['price']);

      $customer = array(
        'name'=>$name,
        'address'=>$address,
        'phone'=>$phone,
        'gender'=>$gender,
        'email'=>$email
      );

      $this->Customer_m->add($customer);

      $customerid = $this->Customer_m->get_id_by_name($name)->row_array();
      // var_dump($customerid['id']);

      $reservasi = array(
        'reservation_code'=>$reservcode,
        'reservation_at'=>$reservat['date'],
        'reservation_date'=>$reservdate,
        'seat_code'=>$seat,
        'customer_id'=>$customerid['id'],
        'rute_id'=>$id_rute,
        'depart_at'=>$departat['depart_at'],
        'price'=>$price['price'],
        'user_id'=>0
      );

      // var_dump($reservasi);

      $this->Reserve_m->add($reservasi);
      // $this->konfirmasi
    }

    function konfirmasi(){
      $this->load->view('template/konfirmasi');
    }

    function about(){
      $this->load->view('template/about');
    }

    function contact(){
      $this->load->view('template/contact');
    }

    function services(){
      $this->load->view('template/services');
    }
  }