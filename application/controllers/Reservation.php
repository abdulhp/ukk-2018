<?php 
	defined('BASEPATH') or exit('no direct access allowed');

	class Reservation extends CI_Controller{
		function index(){
			$this->load->view('vReservation');

			if ($this->input->post('submit')) {
				# code...

				$rescode = $this->input->post('rescode');

				if ($rescode != NULL) {
					# code...
					$rescode = $this->input->post('rescode');
				}else{
					$rescode = rand();
				}
				
				$resat = $this->input->post('resat');
				$resdate = $this->input->post('resdate');
				$seat = $this->input->post('seat');

				$cosid = $this->input->post('cosid');
				$ruteid = $this->input->post('ruteid');
				$departat = $this->input->post('departat');
				
				$price = $this->input->post('price');
				$userid = $this->input->post('userid');

				var_dump($rescode, $resat, $resdate, $seat, $cosid, $ruteid, $departat, $price, $userid);
			}
		}
	}