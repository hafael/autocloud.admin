<?php 

	class Pages extends CI_Model {

		

		/* Campos */
		var $id;
		var $home;
		var $about;
		var $contact;

		function Pages(){
	    	
	        parent::__construct();
	        
	    }

	   
		function return_pages($store_id)
		{
			$this->load->database();
		    $query = $this->db->query("SELECT * FROM pages WHERE store_id = " . $store_id . " LIMIT 1");
		    foreach ($query->result() as $row)
			{
				$this->id = $row->id;
				$this->home = $row->home;
				$this->about = $row->about;
				$this->contact = $row->contact;
			}

		    return true;
		}

	}

?>