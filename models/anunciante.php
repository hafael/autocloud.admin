<?php 

	class Anunciante extends CI_Model {

		

		/* Campos */
		var $id;
		var $email;
		var $password;
		var $nome;

		var $nome_tabela;
		var $data_base_object;
		var $config_database;

		function Anunciante($config_database = "autocloudv2"){
	    	
	        parent::__construct();

	        
	        $this->nome_tabela = "TB_Anunciante";
	        $this->data_base_object = null;
	        $this->config_database = $config_database;
	        
	        
	    }

	    function define($id, $retornaObjetoDeDados = false){

	    	if(is_array($id)){
				
				$this->id = $id['id'];
				$this->email = $id['Email'];
				$this->password = $id['Password'];
				$this->nome = $id['Nome'];
								
				return true;
				
			}else if(is_object($id)){
				
				$this->id = $id->id;
				$this->email = $id->Email;
				$this->password = $id->Password;
				$this->nome = $id->Nome;
							
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
					    $this->email = $row->Email;
					    //$this->password = $row->Password;
					    //$this->nome = $row->Nome;
				    
					}
				}
						
				return true;
			}

			return false;

	    }



	    function verificaEmail($email){

	    	$array_objetos = array();
	    	$array_objetos['status'] = 500;
			$this->load->database();
		    $query = $this->db->query("SELECT id, TipoAnunciante, Email  FROM TB_Anunciante WHERE Email = '".$email."' LIMIT 1");
		    if($query->num_rows() > 0){
		    	foreach ($query->result() as $row){
					//$array_objetos['result'] = $row['id'];
					$array_objetos['result'] = $row;
					$array_objetos['status'] = 200;
				}
		    }else{
		    	$array_objetos['status'] = 400;
		    }

		    
			return $array_objetos;

	    }

	    function adiciona($array_dados){		
			
			//load database
			//$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			//$this->data_base_object->insert($this->nome_tabela, $array_dados);
	    	

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

	    # VERIFICA SE O USUÁRIO ESTÁ LOGADO
	    function logged() {
	        $logged = $this->session->userdata('logged');

	        if (!isset($logged) || $logged != true) {
	            return false;
	        }else{
	        	return true;
	        }
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