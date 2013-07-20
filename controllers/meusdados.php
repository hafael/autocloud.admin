<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MeusDados extends CI_Controller {

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
		$this->load->library('upload');
        $this->load->library('image_lib');
        $this->load->library('moedas');
		$this->load->model('TB_Anunciante','anunciante');
		$this->load->model('TB_AnunciantePessoaFisica','anunciantePF');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));
		if(!$this->anunciante->logged()){
			redirect(base_url().'login/?redirectURL='.current_url(), 'refresh');
		}
	}

	public function index(){
		
        if($this->input->post('nome')){

        	$array_anunciante = array(
				'Email' => $this->input->post('email')
			);
			$this->anunciante->edita($this->anunciante->id, $array_anunciante);
			$array_anunciante_pf = array(
				'NomeAnunciante' => $this->input->post('nome')
			);
			$this->anunciantePF->edita($this->anunciante->id, $array_anunciante_pf);

			redirect(base_url().'admin/meusdados', 'refresh');

        };
		

		$this->load->view('meus-dados');

	}
	public function senha(){

		if($this->input->post('nova_senha')!='' || $this->input->post('nova_senha')){
			if($this->anunciante->verifica_password($this->anunciante->Email, $this->input->post('password'))){
				$this->anunciante->nova_senha($this->anunciante->id, $this->input->post('nova_senha'));
	    		redirect(base_url().'admin/meusdados/senha/true', 'refresh');
	    	}else{
	    		redirect(base_url().'admin/meusdados/senha/false', 'refresh');
	    	}
		}

    	
		$this->load->view('alterar-senha');

    }
    public function remove(){

    	if($this->anunciante->verifica_password($this->anunciante->id, $this->input->post('password'))){
    		$this->anunciante->desativa($this->anunciante->id);
    		redirect(base_url().'logout/', 'refresh');
    	}else{
    		redirect(base_url().'admin/meusdados', 'refresh');
    	}


    }

	
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */