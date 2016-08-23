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

  public function ver_universidades(){
    $data['paises'] = $this->alumnos_model->get_paises();
    $data['universidades'] = $this->alumnos_model->get_universidades();

    $this->load->view('header');
    $this->load->view('alumnos/ver_universidades',$data);
    $this->load->view('footer');
  }
}
