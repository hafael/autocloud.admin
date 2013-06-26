<?php 

	class Announcement extends CI_Model {

		

		/* Campos */
		
		//var $array_objetos = array();

		function Announcement(){
	    	
	        parent::__construct();
	        
	    }

	   	function get_last($store_id)
		{
			$array_objetos = array();
			$this->load->database();
		    $query = $this->db->query("SELECT * FROM announcement WHERE store_id = " . $store_id . " ORDER BY id ASC LIMIT 6");
		    
		    foreach ($query->result() as $row){
				$array_objetos[] = $row;
			}
			return $array_objetos;
		      
		}

	    function create($data)
		{
			$this->load->database();
			if($this->db->insert('announcement', $data)){
				return true;
			}else{
				return false;
			}
		    
		}
		

	}

?>