<?php 
	defined('BASEPATH') or exit('no direct script access allowed');

	/**
	* 
	*/
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			# code...
		}

		public function index()
		{
			# code...
			$this->load->view('HomeView');
		}
	}
 ?>