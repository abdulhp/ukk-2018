<?php 

  /**
  * 
  */
  class Rute_m extends CI_Model
  {
    function gets(){
      return $this->db->get('rute');
    }

    function get_by_id($id){
      $this->db->where('id', $id);
      return $this->db->get('rute');
    }

    function get_by_conditions($select, $where){
      $this->db->select($select);
      return $this->db->get_where('rute', $where);
    }
  }