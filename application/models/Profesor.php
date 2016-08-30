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
			
		}

?>