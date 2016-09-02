<?
	class Admin extends CI_Model
		{
			function Profesor_model()
			{
				parent::__construct();
			}
			
			function getData()
			{
				$this->db->select('idAsignatura,asignatura');
                $this->db->from('asignatura');
                $this->db->where('Estado="1"');
                $usuarios=$this->db->get();
				
				return $usuarios->result();
			}
        
            function insert($data)
            {
                $this->db->set('idAsignatura',$data['id']);
                $this->db->set('asignatura',$data['nombre']);
                $this->db->set('Estado',1);
                $this->db->insert('asignatura');
            }
            
            function obtenMat($data)
            {
                $this->db->select('Estado');
                $this->db->from('asignatura');
                $this->db->where('idAsignatura =',$data);
                $asignatura=$this->db->get();
                return $asignatura->result();
            }
            
            function borra($data)
            {
                $this->db->set('Estado',0);
                $this->db->where('idAsignatura =',$data);
                $this->db->update('asignatura');
            }
			
		}

?>