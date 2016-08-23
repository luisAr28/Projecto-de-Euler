<?php

class Alumnos_model extends CI_Model{

  public function __construct()
  {
      $this->load->database();
  }

  public function get_universidades($idPais)
  {
    $sql = "SELECT * FROM escuela WHERE idPais = ?";
    $query = $this->db->query($sql, array($idPais));
    return $query->result_array();
  }

  public function get_paises()
  {
    $query = $this->db->get('pais');
    return $query->result_array();
  }

}
