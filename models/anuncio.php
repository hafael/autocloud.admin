<?php 

	class Anuncio extends CI_Model {

		

		/* Campos */
		var $id;
		var $TB_Anunciante_id;
		var $TipoVeiculo;
		var $Descricao;
		var $ValorVenda;

		var $nome_tabela;
		var $data_base_object;
		var $config_database;

		function Anunciante($config_database = "autocloudv2"){
	    	
	        parent::__construct();

	        
	        $this->nome_tabela = "TB_Anuncio";
	        $this->data_base_object = null;
	        $this->config_database = $config_database;
	        
	        
	    }

	    function define($id, $retornaObjetoDeDados = false){

	    	if(is_array($id)){
				
				$this->id = $id['id'];
				$this->TB_Anunciante_id = $id['TB_Anunciante_id'];
				$this->TipoVeiculo = $id['TipoVeiculo'];
				$this->Descricao = $id['Descricao'];
				$this->ValorVenda = $id['ValorVenda'];
								
				return true;
				
			}else if(is_object($id)){
				
				$this->id = $id->id;
				$this->TB_Anunciante_id = $id->TB_Anunciante_id;
				$this->TipoVeiculo = $id->TipoVeiculo;
				$this->Descricao = $id->Descricao;
				$this->ValorVenda = $id->ValorVenda;
							
				return true;

			}else{
				
				//load database
				$this->data_base_object = $this->load->database($this->config_database,true);
				
				//cria consultas
				$query = $this->data_base_object->get_where($this->nome_tabela, array('id' => $id));
				
				foreach ($query->result() as $row){
				    
					if($retornaObjetoDeDados === true){
						
						return $row;
						
					}else{
					
						$this->id = $row->id;
					    $this->TB_Anunciante_id = $row->TB_Anunciante_id;
					    $this->TipoVeiculo = $row->TipoVeiculo;
					    $this->Descricao = $row->Descricao;
					    $this->ValorVenda = $row->ValorVenda;
					    
				    
					}
				}
						
				return true;
			}

			return false;

	    }


	    function retorna_ultimos($TB_Anunciante_id){

	    	//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			$array_objetos = array();
			
			//cria consulta
			$this->data_base_object->select('*');
			
			//executa query
			$query = $this->db->get_where($this->nome_tabela, array('TB_Anunciante_id' => $TB_Anunciante_id));
			//$query = $this->data_base_object->get_where($this->nome_tabela, array('TB_Anunciante_id' => null));
						
			foreach ($query->result() as $row){
				//$array_objetos[] = $this->define($row);
				$array_objetos[] = $row;
			}
			
			return $array_objetos;
			
			
	    }


	    function adiciona($array_dados){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->insert($this->nome_tabela, $array_dados);
			
			//Define o objeto com o last id do banco	
			$this->define((int)$this->data_base_object->insert_id());
			
			return false;
	
	    }

	    



	    /*
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
		*/
		

	}

?>