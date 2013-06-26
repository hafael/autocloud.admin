<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NovoAnuncio extends CI_Controller {

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
		$this->load->model('anunciante');
		$this->load->helper('url');
		if(!$this->anunciante->logged()){

			redirect('login/?redirectURL='.current_url(), 'refresh');
		}
	}

	public function index(){
		
        $this->load->helper('url');
		$this->load->model('anunciante');
		$this->load->model('anuncio');
		$this->load->model('anunciante_pessoa_fisica','anunciantePF');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));

		
		if($this->input->post('TB_Anunciante_id')){

			$array_insert = array(
				'TB_Anunciante_id' => $this->input->post('TB_Anunciante_id'),
				'TipoVeiculo' => $this->input->post('TipoVeiculo'),
				'Descricao' => $this->input->post('Descricao'),
				'ValorVenda' => $this->input->post('ValorVenda')
			);	

			$this->anunciante->adiciona($array_insert);

			redirect('meus-anuncios/anuncio/'.$this->anuncio->id, 'refresh');
		}

		

        $this->load->view('novo_anuncio');
	}

	
	

	
	
	
	

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */