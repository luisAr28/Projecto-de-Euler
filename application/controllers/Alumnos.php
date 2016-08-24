<?php

class Alumnos extends CI_Controller{
  public function __construct()
  {
          parent::__construct();
          $this->load->model('alumnos_model');
          $this->load->helper('url_helper');
          $this->load->library('session');
          $this->load->library('form_validation');
  }

  public function index(){

    $this->load->view('header');
    $this->load->view('alumnos/index');
    $this->load->view('footer');
  }

  public function iniciar_sesion()
  {

    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('header');
        $this->load->view('alumnos/index');
        $this->load->view('footer');

    }
    else
    {
        $alumno = $this->alumnos_model->iniciar_sesion();
        if (empty($alumno)){
        redirect('/alumnos/index');
        }
        else{
              $datos = array( 'idAlumno'  => $alumno->idAlumno, 'Nombre' => $alumno->Nombre );
              $this->session->set_userdata($datos);
              redirect('/alumnos/ver_paises');
            }
    }


  }



  public function ver_paises($universidad = NULL){
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

  public function inscribir_materia($idAsignatura)
  {
    $this->alumnos_model->agregar_materia($idAsignatura,$this->session->idAlumno);
    redirect('/alumnos/ver_inscritas');
  }

  public function eliminar_inscritas($idAsignatura)
  {
    $this->alumnos_model->eliminar_inscritas($idAsignatura,$this->session->idAlumno);
    redirect('/alumnos/ver_inscritas');
  }


  public function ver_inscritas()
  {
    $data['inscritas'] = $this->alumnos_model->get_inscritas($this->session->idAlumno);
    $this->load->view('header');
    $this->load->view('alumnos/ver_inscritas',$data);
    $this->load->view('footer');
  }


}
