<?php 

	class TB_TokenPassword extends CI_Model {

		

		/* Campos */
		var $id;
		var $TB_Anunciante_id;
		var $TB_Anunciante_Email;
		var $Token;
		var $Usado;

		var $nome_tabela;
		var $data_base_object;
		var $config_database;
		var $array_objetos;

		function TB_TokenPassword($config_database = "autocloudv2"){
	    	
	        parent::__construct();

	        
	        $this->nome_tabela = "TB_TokenPassword";
	        $this->data_base_object = null;
	        $this->config_database = $config_database;
	        
	        
	    }

	    function define($id, $retornaObjetoDeDados = false){

	    	if(is_array($id)){
				
				$this->id = $id['id'];
				$this->TB_Anunciante_id = $id['TB_Anunciante_id'];
				$this->TB_Anunciante_Email = $id['TB_Anunciante_Email'];
				$this->Token = $id['Token'];
				$this->Usado = $id['Usado'];
								
				return true;
				
			}else if(is_object($id)){
				
				$this->id = $id->id;
				$this->TB_Anunciante_id = $id->TB_Anunciante_id;
				$this->TB_Anunciante_Email = $id->TB_Anunciante_Email;
				$this->Token = $id->Token;
				$this->Usado = $id->Usado;
							
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
					    $this->TB_Anunciante_Email = $row->TB_Anunciante_Email;
					    $this->Token = $row->Token;
					    $this->Usado = $row->Usado;
				    
					}
				}
						
				return true;
			}

			return false;

	    }

	    function valida($email, $token){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->where('TB_Anunciante_Email = ', (string)$email);
			$this->data_base_object->where('Token = ', (int)$token);
			$this->data_base_object->where('Usado = ', false);
			$this->data_base_object->limit(1);
			
			//executa query
			$query = $this->data_base_object->get_where($this->nome_tabela); 

			if($query->num_rows() == 1){
				foreach ($query->result() as $row){
					$array_objetos[] = $row;
				}
				return $array_objetos;
			}else {
				return false;
			}
	
	    }


	    function adiciona($id, $email, $token){

	    	$array_dados = array('TB_Anunciante_id' => (int)$id, 'TB_Anunciante_Email' => (string)$email, 'Token' => (int)$token);
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$query = $this->data_base_object->insert($this->nome_tabela, $array_dados);
			
			if($query){
				return true;
			}else{
				return false;
			}
	
	    }

	    function mata_token($id, $email, $token){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->where('TB_Anunciante_id =', (int)$id);
			$this->data_base_object->where('TB_Anunciante_Email =', (string)$email);
			$this->data_base_object->where('Token =', (int)$token);
			$this->data_base_object->where('Usado =', false);
			$this->data_base_object->update($this->nome_tabela, array('Usado' => true));
			
			return true;
	
	    }
		

	}

?>