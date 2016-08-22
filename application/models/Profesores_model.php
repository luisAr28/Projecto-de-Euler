<?php

class Profesores_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }
  public function get_profesores($nombre = FALSE){

    if ($nombre === FALSE) {
      $query = $this->db->get('profesor');
      return $query->result_array();
    }

    $query = $this->db->get_where('profesor', array('Nombre' => $nombre));
    return $query->row_array();

  }
}
