<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

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
		$this->load->model('TB_AnunciantePessoaFisica','anunciantePF');
		if($this->anunciante->logged()){
			redirect('home', 'refresh');
		}
	}

	function index() {
		redirect('login', 'refresh');
    }
    public function novo(){

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

	   	if($this->input->post('nome')!='' && 
	   	  $this->input->post('email')!='' && 
	   	  $this->input->post('senha')!='' && 
	   	  $this->input->post('resenha')!='' && 
	   	  $this->input->post('estado')!='' && 
	   	  $this->input->post('cidade')!='') {
        	
        	$array_tb_anunciante = array(
				'TipoAnunciante' => $this->input->post('TipoAnunciante'),
				'Email' => $this->input->post('email'),
				'Password' => md5($this->input->post('senha')),
				'TB_Estado_id' => $this->input->post('estado'),
				'TB_Estado_Nome' => $this->input->post('EstadoText'),
				'TB_Cidade_id' => $this->input->post('cidade'),
				'TB_Cidade_Nome' => $this->input->post('CidadeText')
			);

			$this->anunciante->adiciona($array_tb_anunciante);

			//
			// instancia de email ao cliente
			// 
			$this->email->from('contato@autocloud.com.br', 'Autocloud');
		    $this->email->reply_to('contato@autocloud.com.br', 'Contato Autocloud');
		    $this->email->to( $this->input->post('email') );
		    $this->email->subject('Seja bem-vindo ao Autocloud');
		    $data_cliente = array( 'nome' => $this->input->post('nome'),
		    					   'email' => $this->input->post('email'),
		    					   'estado' => $this->input->post('EstadoText'),
		    					   'cidade' => $this->input->post('CidadeText'),
		    					   'telefone' => $this->input->post('telefone') );
		    $email= $this->load->view('email_template/novo_cadastro', $data_cliente, TRUE);
		 	$this->email->message( $email );

			if($this->anunciante->TipoAnunciante==1){

				$array_tb_anunciantePF = array(
					'TB_Anunciante_id' => $this->anunciante->id,
					'NomeAnunciante' => $this->input->post('nome'),
					'TelefonePrincipal' => $this->input->post('telefone'),
				);

				$this->anunciantePF->adiciona($array_tb_anunciantePF);

				if($this->anunciante->autentica_login($this->input->post('email'), $this->input->post('senha')) === true){
						
					$this->session->set_userdata('id_login', $this->anunciante->id);
					$this->session->set_userdata('logged', true);

					//
					// Envio de email ao cliente
					// 
				    $this->email->message( $email );
				    $this->email->send();
					
					redirect('novo-anuncio', 'refresh');
				};
			}

			

        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */