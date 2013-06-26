<?php 

	class Store extends CI_Model {

		/* Campos */
		var $id;

		function Store(){
	        parent::__construct();
	    }

	    function define_store($host, $hostname)
		{
			
			$this->load->database();
		    $query = $this->db->query("SELECT id FROM store WHERE host = '" . $host . "' OR hostname = '" . $hostname . "' LIMIT 1");
		    
			if ($query->num_rows() > 0){
		    	$row = $query->row();
				return $row->id;
		    }else{
		    	return false;
		    }
		}
		

	}

?>