<?php 

	class Vehicle extends CI_Model {

		

		/* Campos */
		var $id;
		var $name;
		//var $array_objetos = array();

		function Vehicle(){
	    	
	        parent::__construct();
	        
	    }

	   
	    function vehicle_brand()
		{
			$array_objetos = array();
			$this->load->database();
		    $query = $this->db->query("SELECT * FROM TB_FabricanteVeiculo ORDER BY Nome");
		    
		    foreach ($query->result() as $row){
				$array_objetos[] = $row;
			}
			return $array_objetos;
		      
		}
		function vehicle_model($car_company_id)
		{
			$array_objetos = array();
			$this->load->database();
		    $query = $this->db->query("SELECT * FROM TB_ModeloVeiculo WHERE TB_FabricanteVeiculo_id = '".$car_company_id."' ORDER BY Nome");
		    
		    foreach ($query->result() as $row){
				$array_objetos[] = $row;
			}
			return $array_objetos;
		      
		}
		function vehicle_years_fabrication($car_model_id)
		{
			$array_objetos = array();
			$this->load->database();
		    $query = $this->db->query("SELECT * FROM TB_AnoFabricacaoVeiculo WHERE TB_ModeloVeiculo_id = '".$car_model_id."' ORDER BY Nome");
		    
		    foreach ($query->result() as $row){
				$array_objetos[] = $row;
			}
			return $array_objetos;
		      
		}
		

	}

?>