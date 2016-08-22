<?php

  class Profesores extends CI_Controller{

    public function __construct()
    {
            parent::__construct();
            $this->load->model('profesores_model');
            $this->load->helper('url_helper');
    }

    public function index(){
      $data['profesores'] = $this->profesores_model->get_profesores();
      $this->load->view('header.php');
      $this->load->view('profesores/index.php',$data);
      $this->load->view('footer.php');
    }

    public function view($nombre = NULL){
      $data['profesor'] = $this->profesores_model->get_profesores($nombre);

      if (empty($data['profesor'])) {
        show_404();
      }
      $this->load->view('header.php');
      $this->load->view('profesores/view',$data);
      $this->load->view('footer.php');
    }

  }
