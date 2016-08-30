<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Profesor_controller extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
		}
		
		public function index()
		{
			$this->load->model('Profesor');
			
			$data['page_title']="Prueba";
			
			$usuarios = $this->Profesor->getData();
			
			$data['usuarios']=$usuarios;
			
			$this->load->view('ProfesorV',$data);
		}
	}
?>