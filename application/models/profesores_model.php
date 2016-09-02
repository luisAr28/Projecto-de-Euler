<?php

	class Profesores_model extends CI_Model{
	
		function Profesores_model(){
		parent::__construct(); //llamada al constructor de Model.
		$this->load->database();
		}
		
		function getData(){
		
			$profesores = $this->db->get_where('profesor',array('Estado'=>1)); //obtenemos la tabla 'profesor'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
			return $profesores->result(); //devolvemos el resultado de lanzar la query.
		
		}
		
		function insert($data){
		
			$this->db->set('idProfesor', $data['idprofesor']);
			$this->db->set('ApPaterno', $data['apellpat']);
			$this->db->set('ApMaterno', $data['apellmat']);
			$this->db->set('Nombre', $data['nombre']);
			$this->db->set('email', $data['correo']);
			$this->db->set('password', $data['contrasena']);
			$this->db->set('idEscuela', $data['idescuela']);
			$this->db->set('Estado', $data['estado']);
			$this->db->insert('profesor');
		
		}
		
		function consultData(){
		
			$data = $_POST['txtIdProfesor'];
			$profesor = $this->db->get_where('profesor',array('idProfesor'=>$data));
			return $profesor->result();
		
		}
		
		function baja($idprofesor,$data){
		
			$this->db->set('Estado',$data['estado']);
			$this->db->where('idProfesor', $idprofesor);
			$this->db->update('profesor');
		
		}
		
		function obtenerProfesor($idProfesor){
		
			$this->db->select('idProfesor, ApPaterno, ApMaterno, Nombre, email, password, idEscuela');
			$this->db->from('profesor');
			$this->db->where('idProfesor = ' . $idProfesor);
			$profesor = $this->db->get();
			return $profesor->result();
		
		}
		
		function update($data){
		
			$this->db->set('idProfesor', $data['idprofesor']);
			$this->db->set('ApPaterno', $data['apellpat']);
			$this->db->set('ApMaterno', $data['apellmat']);
			$this->db->set('Nombre', $data['nombre']);
			$this->db->set('email', $data['correo']);
			$this->db->set('password', $data['contrasena']);
			$this->db->set('idEscuela', $data['idescuela']);
			$this->db->where('idProfesor', $data['idprofesor']);
			$this->db->update('profesor');
		
		}
	
	}

?>