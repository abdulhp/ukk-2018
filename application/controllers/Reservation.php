<?php 
defined('BASEPATH') or exit('no direct access allowed');

class Reservation extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Reserve_m');
		$this->load->model('Rute_m');
		$this->load->model('Customer_m');
	}

	function index(){
		$data = new stdClass();
		$data->reservasi = $this->Reserve_m->gets();
		$this->load->view('reservasi/vReservation', $data);
	}

	function add(){
		$data = new stdClass();
		$data->rute = $this->Rute_m->gets()->result();
		$this->load->view('reservasi/vInputReservation', $data);
	}

	function delete($id){
		$this->Reserve_m->del($id);
		redirect('reservation');
	}

	function edit($id){
		$data = new stdClass();
		$data->editreserv = $this->Reserve_m->get_by_id($id)->result();
		$data->rute = $this->Rute_m->gets()->result();
		$this->load->view('reservasi/vEditReservation', $data);
	}

	function procadd(){
				# code...
		

		$name = $this->input->post('name');
		$addr = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$email = $this->input->post('email');
		$customerproc = array(
			'name' => $name,
			'address' => $addr,
			'phone' => $phone,
			'gender' => $gender,
			'email' => $email
		);
		$this->Customer_m->add($customerproc);

		$customerid = $this->Customer_m->get_id_by_name($name)->row_array();
		$rescode = rand();
		$resat = date('Y-m-d');
		$resdate = $this->input->post('reservdate');
		$seat = $this->input->post('seat');
		$ruteid = $this->input->post('rute');
		$departat = $this->Rute_m->get_by_conditions('depart_at', array('id'=>$ruteid))->row_array();
		$price = $this->Rute_m->get_by_conditions('price', array('id'=>$ruteid))->row_array();
		$userid = $_SESSION['userid'];
		$reservasiproc = array(
			'reservation_code' => $rescode,
			'reservation_at' => $resat,
			'reservation_date' => $resdate,
			'seat_code' => $seat,
			'customer_id' => $customerid['id'],
			'rute_id' => $ruteid,
			'depart_at' => $departat['depart_at'],
			'price' => $price['price'],
			'user_id' => $userid	
		);
		
		$this->Reserve_m->add($reservasiproc);
		redirect('reservation');
	}
}