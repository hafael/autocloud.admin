<?php 

	class TB_Anuncio extends CI_Model {

		

		/* Campos */
		var $id;
		var $TB_Anunciante_id;
		var $TipoVeiculo;
		var $TipoAnuncio;
		var $Descricao;
		var $ValorVenda;
		var $TelContato;

		var $nome_tabela;
		var $data_base_object;
		var $config_database;
		var $array_objetos;

		function TB_Anuncio($config_database = "autocloudv2"){
	    	
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
				$this->TipoAnuncio = $id['TipoAnuncio'];
				$this->Descricao = $id['Descricao'];
				$this->ValorVenda = $id['ValorVenda'];
				$this->TelContato = $id['TelContato'];
								
				return true;
				
			}else if(is_object($id)){
				
				$this->id = $id->id;
				$this->TB_Anunciante_id = $id->TB_Anunciante_id;
				$this->TipoVeiculo = $id->TipoVeiculo;
				$this->TipoAnuncio = $id->TipoAnuncio;
				$this->Descricao = $id->Descricao;
				$this->ValorVenda = $id->ValorVenda;
				$this->TelContato = $id->TelContato;
							
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
					    $this->TipoAnuncio = $row->TipoAnuncio;
					    $this->Descricao = $row->Descricao;
					    $this->ValorVenda = $row->ValorVenda;
					    $this->TelContato = $row->TelContato;
				    
					}
				}
						
				return true;
			}

			return false;

	    }


	    function lista($id_anunciante) {
	        //load database
			$this->data_base_object = $this->load->database($this->config_database,true);

			//cria consulta
			$this->data_base_object->where('TB_Anunciante_id = ', $id_anunciante);

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
		

	}

?>