<?php
/**
* 
*/
class Reserve_m extends CI_Model
{
	function gets(){
		return $this->db->get('Reservation')->result();
	}

	function get_by_id($id){
		return $this->db->get_where('Reservation', array('id'=>$id));
	}

	function del($id){
		$this->db->where('id', $id);
		return $this->db->delete('Reservation');
	}

	function update($table, $where, $id){
		$this->db->where('id', $id);
		return $this->db->update($table, $where);
	}

	function add($value){
		return $this->db->insert('Reservation', $value);
	}
}