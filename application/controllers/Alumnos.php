<?php

class Alumnos extends CI_Controller{
  public function __construct()
  {
          parent::__construct();
          $this->load->model('alumnos_model');
          $this->load->helper('url_helper');
  }

  public function index(){

    $this->load->view('header');
    $this->load->view('alumnos/index');
    $this->load->view('footer');
  }

  public function ver_universidades($universidad = NULL){
    $data['paises'] = $this->alumnos_model->get_paises();

    $this->load->view('header');
    $this->load->view('alumnos/ver_paises',$data);
    $this->load->view('footer');
  }

  public function ver_universidad($idPais)
  {
    $data['universidades'] = $this->alumnos_model->get_universidades($idPais);
    $this->load->view('header');
    $this->load->view('alumnos/ver_universidades',$data);
    $this->load->view('footer');
  }

  public function ver_materias($idEscuela)
  {
    $data['materias'] = $this->alumnos_model->get_materias($idEscuela);
    $this->load->view('header');
    $this->load->view('alumnos/ver_materias',$data);
    $this->load->view('footer');
  }

  public function inscribir_materia($idAlumno)
  {
    echo "ver materias";
  }
}
