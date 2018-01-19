<?php 
	defined('BASEPATH') or exit('no direct script access allowed');

	/**
	* 
	*/
	class crud extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		public function bcrypt($value)
		{
			# code...
			$options = array(
				'cost' => 10,
				'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
			);

			$hashed = $this->password_hash($value, PASSWORD_BCRYPT, $options);

			return $hashed;
		}
	}