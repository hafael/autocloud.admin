<?php 

	class Anunciante_pessoa_fisica extends CI_Model {

		

		/* Campos */
		var $id;
		var $tb_anunciante_id;
		var $nome_anunciante;

		var $nome_tabela;
		var $data_base_object;
		var $config_database;

		function Anunciante_pessoa_fisica($config_database = "autocloudv2"){
	    	
	        parent::__construct();

	        
	        $this->nome_tabela = "TB_AnunciantePessoaFisica";
	        $this->data_base_object = null;
	        $this->config_database = $config_database;
	        
	        
	    }

	    function define($id, $retornaObjetoDeDados = false){

	    	if(is_array($id)){
				
				$this->id = $id['id'];
				$this->tb_anunciante_id = $id['TB_Anunciante_id'];
				$this->nome_anunciante = $id['NomeAnunciante'];
								
				return true;
				
			}else if(is_object($id)){
				
				$this->id = $id->id;
				$this->tb_anunciante_id = $id->TB_Anunciante_id;
				$this->nome_anunciante = $id->NomeAnunciante;
							
				return true;

			}else{
				
				//load database
				$this->data_base_object = $this->load->database($this->config_database,true);
				
				//cria consultas
				$query = $this->data_base_object->get_where($this->nome_tabela, array('TB_Anunciante_id' => $id));
				
				foreach ($query->result() as $row){
				    
					if($retornaObjetoDeDados === true){
						
						return $row;
						
					}else{
					
						$this->id = $row->id;
					    $this->tb_anunciante_id = $row->TB_Anunciante_id;
					    $this->nome_anunciante = $row->NomeAnunciante;
				    
					}
				}
						
				return true;
			}

			return false;

	    }

		function adiciona($array_dados){		
			
			$arrayTB_Anunciante = array(
	    		'TipoAnunciante' => $array_dados['TipoAnunciante'],
	    		'Email' => $array_dados['Email'],
	    		'Password' => $array_dados['Password']
	    	);
	    	
	    	$this->load->database();
	    	$this->db->insert('TB_Anunciante', $arrayTB_Anunciante);

	    	$arrayTB_PessoaFisica = array(
	    		'NomeAnunciante' => $array_dados['NomeAnunciante'],
	    		'TB_Anunciante_id' => $this->db->insert_id()
	    	);

	    	$this->db->insert('TB_AnunciantePessoaFisica', $arrayTB_PessoaFisica);

				    	
	    }

	    # VALIDA USUÁRIO
	    /*
	    function autentica_login($email, $password) {
	    	$this->load->database();
	        $this->db->where('Email', $email); 
	        $this->db->where('Password', md5($password));

	        $query = $this->db->get('TB_Anunciante'); 

	        foreach ($query->result() as $row){
				$this->define($row->id);
				return true;
			}
			
			return false;
	    }
	    */
	    function autentica_login($login, $MD5_senha){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->where('Email = ', $login);
			$this->data_base_object->where('Password = ', $MD5_senha);
			
			//executa query
			$query = $this->data_base_object->get_where($this->nome_tabela); 
			//$query = $this->db->get($this->nome_tabela);
			
			foreach ($query->result() as $row)
			{
				$this->define($row->id);
				return true;
			}
			
			return false;
	
	    }


	}

?>