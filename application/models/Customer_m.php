<?php 

  /**
  * 
  */
  class Customer_m extends CI_Model
  {
    function gets(){
      return $this->db->get('customer');
    }

    function add($where){
      return $this->db->insert('customer', $where);
    }

    function get_id_by_name($name){
      $this->db->select('id');
      return $this->db->get_where('customer', array('name'=>$name));
    }
  }