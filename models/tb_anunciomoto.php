<?php 

	class TB_AnuncioMoto extends CI_Model {

		

		/* Campos */
		var $id;
		var $TB_Anuncio_id;
		var $Montadora;
		var $Modelo;
		var $AnoFab;
		var $AnoMod;
		var $Versao;
		var $TB_FabricanteVeiculo_id;
		var $TB_ModeloVeiculo_TB_FabricanteVeiculo_id;
		var $TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id;
		var $TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id;
		var $TB_VersaoVeiculo_id;
		
		var $Combustivel;
		var $Abs;

		var $nome_tabela;
		var $data_base_object;
		var $config_database;
		var $array_objetos;

		function TB_AnuncioMoto($config_database = "autocloudv2"){
	    	
	        parent::__construct();

	        
	        $this->nome_tabela = "TB_AnuncioMoto";
	        $this->data_base_object = null;
	        $this->config_database = $config_database;
	        
	        
	    }

	    function define($id, $retornaObjetoDeDados = false){

	    	if(is_array($id)){
				
				$this->id = $id['id'];
				$this->TB_Anuncio_id = $id['TB_Anuncio_id'];
				$this->Montadora = $id['Montadora'];
				$this->Modelo = $id['Modelo'];
				$this->AnoFab = $id['AnoFab'];
				$this->AnoMod = $id['AnoMod'];
				$this->Versao = $id['Versao'];
				$this->TB_FabricanteVeiculo_id = $id['TB_FabricanteVeiculo_id'];
				$this->TB_ModeloVeiculo_TB_FabricanteVeiculo_id = $id['TB_ModeloVeiculo_TB_FabricanteVeiculo_id'];
				$this->TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id = $id['TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id'];
				$this->TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id = $id['TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id'];
				$this->TB_VersaoVeiculo_id = $id['TB_VersaoVeiculo_id'];
				$this->Combustivel = $id['Combustivel'];
				$this->Abs = $id['Abs'];




				return true;
				
			}else if(is_object($id)){
				
				$this->id = $id->id;
				$this->TB_Anuncio_id = $id->TB_Anuncio_id;
				$this->Montadora = $id->Montadora;
				$this->Modelo = $id->Modelo;
				$this->AnoFab = $id->AnoFab;
				$this->AnoMod = $id->AnoMod;
				$this->Versao = $id->Versao;
				$this->TB_FabricanteVeiculo_id = $id->Descricao;
				$this->TB_ModeloVeiculo_TB_FabricanteVeiculo_id = $id->TB_ModeloVeiculo_TB_FabricanteVeiculo_id;
				$this->TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id = $id->TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id;
				$this->TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id = $id->TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id;
				$this->TB_VersaoVeiculo_id = $id->TB_VersaoVeiculo_id;
				$this->Combustivel = $id->Combustivel;
				$this->Abs = $id->Abs;

				return true;

			}else{
				
				//load database
				$this->data_base_object = $this->load->database($this->config_database,true);
				
				//cria consultas
				$query = $this->data_base_object->get_where($this->nome_tabela, array('TB_Anuncio_id' => $id));
				
				foreach ($query->result() as $row){
				    
					if($retornaObjetoDeDados === true){
						
						return $row;
						
					}else{
					
						$this->id = $row->id;
					    $this->TB_Anuncio_id = $row->TB_Anuncio_id;
					    $this->Montadora = $row->Montadora;
					    $this->Modelo = $row->Modelo;
					    $this->AnoFab = $row->AnoFab;
					    $this->AnoMod = $row->AnoMod;
					    $this->Versao = $row->Versao;
					    $this->TB_FabricanteVeiculo_id = $row->TB_FabricanteVeiculo_id;
					    $this->TB_ModeloVeiculo_TB_FabricanteVeiculo_id = $row->TB_ModeloVeiculo_TB_FabricanteVeiculo_id;
					    $this->TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id = $row->TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id;
					    $this->TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id = $row->TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id;
					    $this->TB_VersaoVeiculo_id = $row->TB_VersaoVeiculo_id;
				    	$this->Combustivel = $row->Combustivel;
				    	$this->Abs = $row->Abs;

					}
				}
						
				return true;
			}

			return false;

	    }


	    function lista($id_anuncio) {
	        //load database
			$this->data_base_object = $this->load->database($this->config_database,true);

			//cria consulta
			$this->data_base_object->where('TB_Anuncio_id = ', $id_anuncio);

			//executa query
			$query = $this->data_base_object->get_where($this->nome_tabela);

			foreach ($query->result() as $row){
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
			
			return (int)$this->data_base_object->insert_id();
	
	    }

	    

	    function edita($id_anuncio, $array_dados){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->where('TB_Anuncio_id', (int)$id_anuncio);
			$this->data_base_object->update($this->nome_tabela, $array_dados);

			//$this->data_base_object->update($this->nome_tabela, $array_dados);
			
			//Define o objeto com o last id do banco	
			$this->define((int)$id_anuncio);
			
			return (int)$id_anuncio;
	
	    }
		

	}

?>