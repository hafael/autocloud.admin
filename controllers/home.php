<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('TB_Anuncio','anuncio');
		$this->load->model('TB_AnuncioCarro','anuncio_carro');
		$this->load->model('TB_ImagensAnuncio','anuncio_imagens');
		if(!$this->anunciante->logged()){
			redirect(base_url().'login/', 'refresh');
		}else{
			$this->anunciante->define($this->session->userdata('id_login'));
			$this->anunciantePF->define($this->session->userdata('id_login'));
		}
	}

	public function index(){
		
  		redirect(base_url().'meus-anuncios', 'refresh');
	}
	

	
	

	
	
	
	

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */