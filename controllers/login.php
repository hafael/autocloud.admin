<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$data = array();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('path');
		$this->load->helper('directory');
		$this->load->model('TB_Anunciante','anunciante');
	}

	function index() {
        $this->load->view('login');
    }
    public function logar(){
    	if($this->anunciante->logged()){
			redirect('home', 'refresh');
		}else {
			if($this->input->post('email') && $this->input->post('senha')){
	        	if($this->anunciante->autentica_login($this->input->post('email'), $this->input->post('senha')) === true){
					$this->session->set_userdata('id_login', $this->anunciante->id);
					$this->session->set_userdata('logged', true);
					redirect('home/', 'refresh');
				}else{
					redirect('login?erroLogin=true', 'refresh');
				}
	        }
		}
		
    }
    function gerartoken() {
    	$this->load->model('TB_TokenPassword','token');

    	if($this->input->post('email')){
    		$email_result_id = $this->anunciante->verifica_email($this->input->post('email'));
    		if($email_result_id != false){
    			$token = substr(uniqid(mt_rand()),0,4);

	    		if($this->token->adiciona($email_result_id, $this->input->post('email'), $token)){

	    			//
					// Config de email ao cliente
					// 
					$email_config = Array(
				        'protocol'  => 'smtp',
				        'smtp_host' => 'ssl://smtp.googlemail.com',
				        'smtp_port' => '465',
				        'smtp_user' => 'contato@autocloud.com.br',
				        'smtp_pass' => 'rafael655321',
				        'mailtype'  => 'html',
				        'starttls'  => true,
				        'newline'   => "\r\n"
				    );
				    $this->load->library('email', $email_config);

				    //
					// instancia de email ao cliente
					// 
					$this->email->from('contato@autocloud.com.br', 'Autocloud');
				    $this->email->reply_to('contato@autocloud.com.br', 'Autocloud');
				    $this->email->to( $this->input->post('email') );
				    $this->email->subject('Recuperar senha - Autocloud');
				    $data_cliente = array( 'email' => $this->input->post('email'),
				    					   'token' => $token);
				    $email = $this->load->view('email_template/recuperar_senha', $data_cliente, TRUE);
				 	$this->email->message( $email );

				 	//
					// Envio de email ao cliente
					// 
				    $this->email->message( $email );
				    $this->email->send();

	    			redirect('login/recuperar-senha/?email='.$this->input->post('email'), 'refresh');
	    		}else{
	    			redirect('login/esqueci-minha-senha/?token=false', 'refresh');
	    		}
    		}else{
    			redirect('login/esqueci-minha-senha/?email=false', 'refresh');
    		}
    		
        }
        $this->load->view('esqueci-senha');
    }
    function recuperarsenha() {
    	$this->load->model('TB_TokenPassword','token');
    	if($this->input->post('token')){
    		$array_token = $this->token->valida($this->input->get('email'), $this->input->post('token'));
	    	if($array_token != false){
	    		if($this->token->mata_token($array_token['TB_Anunciante_id'], $this->input->get('email'), $this->input->post('token'))){
	    			if($this->anunciante->nova_senha($array_token['TB_Anunciante_id'], $this->input->post('senha'))){
		    			redirect(base_url().'login', 'refresh');
		    		}
	    		}
	    		
	    	}
    	}
    	
    	
        $this->load->view('recuperar-senha-token');
    }
    
    public function logout(){
	   $this->session->unset_userdata('logged');
	   $this->session->unset_userdata('id_login');
	   redirect(base_url().'login', 'refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */