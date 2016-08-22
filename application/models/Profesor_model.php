<?php

class Profesor_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }
  public function get_profesores($email = FALSE){

    if ($email === FALSE) {
      $query = $this->db->get('profesor');
      return $query->result_array();
    }

    $query = $this->db->get_where('profesor', array('email' => $email));
    return $query->row_array();

  }
}
