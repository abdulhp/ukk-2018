<?php
  /**
  * 
  */
  class Main_m extends CI_Model
  {
    function gets(){
      // $this->db->distinct();
      return $this->db->get('rute');
    }
    
    function gets_by_condition($table, $where){
      $this->db->where($where);
      return $this->db->get($table);
    }

    function gets_by_condition2($select, $table, $where){
      $this->db->select($select);
      $this->db->where($where);
      return $this->db->get($table);
    }

    function get_rute($id){
      $this->db->where('id', $id);
      return $this->db->get('rute');
    }

    function cari_maskapai($where){
      $this->db->from('rute');
      $this->db->where($where);
      $this->db->join('transportation', 'transportation.id = rute.transportation_id');
      return $this->db->get();
    }
  } 