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

  public function get_materias($idEscuela)
  {
    $sql = "SELECT a.asignatura,a.idAsignatura FROM asignatura a, asignaturaescuela ae WHERE
    ae.idEscuela = ? AND ae.idAsignatura = a.idAsignatura";
    $query = $this->db->query($sql, array($idEscuela));
    return $query->result_array();
  }

  public function iniciar_sesion()
  {
       $email = $this->input->post('email');
       $password = $this->input->post('password');

       $sql = "SELECT * FROM alumno WHERE email = ? AND password = ? LIMIT 1";
       $query = $this->db->query($sql, array($email,$password));
       return $query->row();
  }

  public function agregar_materia($idAsignatura,$idAlumno)
  {
    $data = array(
      'idAlumno' => $idAlumno,
      'idAsignatura' => $idAsignatura);

  return $this->db->insert('alumnoasignatura', $data);
  }

  public function get_inscritas($idAlumno)
  {
    $sql = "SELECT a.asignatura,a.idAsignatura FROM asignatura a, alumnoasignatura aa WHERE
    aa.idAlumno = ? AND aa.idAsignatura = a.idAsignatura";
    $query = $this->db->query($sql, array($idAlumno));
    return $query->result_array();
  }

  public function eliminar_inscritas($idAsignatura,$idAlumno)
  {
    $sql = "DELETE FROM alumnoasignatura WHERE
    idAlumno = ? AND idAsignatura = ?";
    $query = $this->db->query($sql, array($idAlumno,$idAsignatura));
  }

}
