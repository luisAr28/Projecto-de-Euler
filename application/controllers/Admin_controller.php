<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin_controller extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
		}
		
		public function index()
		{
			$this->load->model('Admin');
			
			$data['page_title']="Admin";
			
			$usuarios = $this->Admin->getData();
			
			$data['usuarios']=$usuarios;
			
			$this->load->view('materias',$data);
		}
        
        function alta()
        {
            $data['page_title']="Alta Materia";
            $this->load->view('Alta_materia',$data);
        }
        
        function baja()
        {
            $data['page_title']="Baja Materia";
            $this->load->view('Baja_materia',$data);
        }
        
        function altaMat()
		{
            $data['id'] = $_POST['Id'];
            $data['nombre'] = $_POST['Nombre'];
            
			$this->load->model('Admin');/*modelo*/
            $this->Admin->insert($data);
			
			$this->consMat();
		}
        
        function bajaMat()
		{
            $data = $_POST['Id'];
                       
			$this->load->model('Admin');/*modelo*/
            $this->Admin->borra($data);
			
			$this->consMat();
		}
        
        public function consMat()
		{
			$this->load->model('Admin');
			
			$data['page_title']="Admin";
			
			$usuarios = $this->Admin->getData();
			
			$data['usuarios']=$usuarios;
			
			$this->load->view('materias',$data);
		}
	}
?>