<?php 

	class Home extends CI_Model {

		

		/* Campos */
		var $id;
		var $company_name;
		var $fantasy_name;
		var $cnpj;
		var $address;
		var $city_id;
		var $city_state_id;

		function Home(){
	    	
	        parent::__construct();
	        
	    }

	   
		function store_info($store_id)
		{
			$this->load->database();
		    $query = $this->db->query("SELECT * FROM store_info WHERE store_id = " . $store_id . " LIMIT 1");
		    foreach ($query->result() as $row)
			{
				$this->id = $row->id;
				$this->company_name = $row->company_name;
				$this->fantasy_name = $row->fantasy_name;
				$this->cnpj = $row->cnpj;
				$this->address = $row->address;
				$this->city_id = $row->city_id;
				$this->city_state_id = $row->city_state_id;
			}

		    return true;
		}

	}

?>