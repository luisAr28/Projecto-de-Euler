<?php

  class Profesores extends CI_Controller{

    public function __construct()
    {
            parent::__construct();
            $this->load->model('profesor_model');
            $this->load->helper('url_helper');
    }

    public function index(){
      $data['profesores'] = $this->profesor_model->get_profesores();
      $this->load->view('header.php');
      $this->load->view('profesores/index.php',$data);
      $this->load->view('footer.php');
    }

  }
