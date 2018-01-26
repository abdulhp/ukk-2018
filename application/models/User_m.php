<?php 

	/**
	* 
	*/
	class User_m extends CI_Model
	{
		function get_id_by_username($username){
			$this->db->select('id');
			$this->db->where('username', $username);
			return $this->db->get('user')->result();
		}

		function get_username_by_id($id){
			$this->db->select('username');
			$this->db->where('id', $id);
			return $this->db->get('user')->result();
		}

		function cek_login($table, $where){
			return $this->db->get_where($table, $where);
		}

		function gets(){
			return $this->db->get('user')->result();
		}

		function delete_user($id){
			$this->db->where('id', $id);
			return $this->db->delete('user');
		}
	}

