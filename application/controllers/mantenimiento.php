<?php

	class Mantenimiento extends CI_Controller{
	
		public function __construct() {
		
			parent::__construct();
			
			$this->load->helper('url_helper');
		
		}
		
		function index(){
		
			$this->load->model('profesores_model'); //cargamos el modelo
			$data['page_title'] = "Movilidad - Profesores";
			$this->load->view('header.php');
			//$this->load->view('index.php',$data);
			$this->load->view('footer.php');
			
			
			
			//Obtener datos de la tabla 'profesor'
			$profesores = $this->profesores_model->getData(); //llamamos a la función getData() del modelo creado anteriormente.
			
			$data['profesores'] = $profesores;
			
			//load de vistas
			$this->load->view('profesores_view', $data); //llamada a la vista, que crearemos posteriormente
		
		}
		
		//public function view($nombre = NULL){
		//	$data['profesor'] = $this->profesores_model->get_profesores($nombre);
			
		//		if (empty($data['profesor'])) {
		//			show_404();
		//		}
		//	$this->load->view('header.php');
		//	$this->load->view('profesores/view',$data);
		//	$this->load->view('footer.php');
		//}
		
		function solicitoalta(){
		
			$this->load->model('profesores_model');
			$this->load->view('header.php');
			$this->load->view('footer.php');
			$this->load->view('alta_prof.php');
		
		}
		
		function alta(){
		
			//recogemos los datos obtenidos por POST
			$data['idprofesor'] = $_POST['txtIdProfesor'];
			$data['apellpat'] = $_POST['txtApPat'];
			$data['apellmat'] = $_POST['txtApMat'];
			$data['nombre'] = $_POST['txtNombre'];
			$data['correo'] = $_POST['txtCorreo'];
			$data['contrasena'] = $_POST['txtContra'];
			$data['idescuela'] = $_POST['txtIdEscuela'];
			$data['estado'] = 1;
			
			//llamamos al modelo, concretamente a la función insert() para que nos haga el insert en la base de datos.
			$this->load->model('profesores_model');
			$this->profesores_model->insert($data);
			
			//volvemos a visualizar la tabla
			$this->index();
		
		}
		
		function solicitobaja(){
		
			$this->load->model('profesores_model');
			$this->load->view('header.php');
			$this->load->view('footer.php');
			$this->load->view('baja_prof.php');
		
		}
		
		function baja(){
		
			//obtenemos el id.
			$idprofesor = $_POST['txtIdProfesor'];
			$data['estado'] = 0;
			//cargamos el modelo y llamamos a la función baja(), pasándole el id del registro que queremos borrar.
			$this->load->model('profesores_model');
			$this->profesores_model->baja($idprofesor,$data);
			//mostramos la vista de nuevo.
			$this->index();
		
		}
		
		function accion(){
		
			//cargamos el modelo y obtenemos la información del profesor seleccionado.
			$data['page_title'] = "Editar Información";
			$this->load->model('profesores_model');
			$this->load->view('header.php');
			$this->load->view('footer.php');
			$data['usuario'] = $this->profesores_model->obtenerProfesor($_POST['editar']);
			//cargamos la vista para editar la información, pasandole dicha información.
			$this->load->view('edit', $data);
		
		}
		
		function editar(){
		
			//recogemos los datos por POST
			$data['idprofesor'] = $_POST['id'];
			$data['apellpat'] = $_POST['txtApPat'];
			$data['apellmat'] = $_POST['txtApMat'];
			$data['nombre'] = $_POST['txtNombre'];
			$data['correo'] = $_POST['txtCorreo'];
			$data['contrasena'] = $_POST['txtContra'];
			$data['idescuela'] = $_POST['txtIdEscuela'];
			//cargamos el modelo y llamamos a la función update()
			$this->load->model('profesores_model');
			$this->profesores_model->update($data);
			//volvemos a cargar la primera vista
			$this->index();			
		
		}
		
		function solicitoconsulta(){
		
			$this->load->model('profesores_model');
			$this->load->view('header.php');
			$this->load->view('footer.php');
			$this->load->view('ver_prof.php');
		
		}
		
		function selectinfo(){
		
			$data['page_title_consulta'] = "Consulta Información";
			$this->load->model('profesores_model');
			$this->load->view('header.php');
			$this->load->view('footer.php');
			$profesor = $this->profesores_model->consultData();
			$data['profesor'] = $profesor;
			$this->load->view('consul_prof',$data);
		
		}
	
	}

?>