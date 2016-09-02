<?
	class Profesor extends CI_Model
		{
			function Profesor_model()
			{
				parent::__construct();
			}
			
			function getData()
			{
				$usuarios=$this->db->get('profesor');
				
				return $usuarios->result();
			}
        
            function obtenerOcupabilidad()
            {
                $this->db->select('a.asignatura,pa.Ocupabilidad');
                $this->db->from('asignatura a, profesor p, profesorasignatura pa');
                $this->db->where('a.idAsignatura=pa.idAsignatura
and pa.idProfesor=p.idProfesor
and p.idProfesor="1010";');
                $ocupabilidad = $this->db->get();
                return $ocupabilidad->result();
            }
        
            function obtenerTutorados()
            {
                $this->db->select('a.Nombre,a.ApPaterno,a.ApMaterno,e.Escuela');
                $this->db->from('alumno a, escuela e,
profesor p');
                $this->db->where('a.idProfesor=p.idProfesor and a.idEscuela=e.idEscuela and 
p.idProfesor="1010" and a.Estado="1";');
                $tutorado = $this->db->get();
                return $tutorado->result();
            }
			
		}

?>