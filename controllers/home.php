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
		$this->load->model('anunciante');
		$this->load->helper('url');
		if(!$this->anunciante->logged()){
			redirect(base_url().'login/?redirectURL='.current_url(), 'refresh');
		}
	}

	public function index(){
		
  		// $this->load->helper('url');
		// $this->load->model('anunciante');
		// $this->load->model('anunciante_pessoa_fisica','anunciantePF');
		// $this->anunciante->define($this->session->userdata('id_login'));
		// $this->anunciantePF->define($this->session->userdata('id_login'));

  		// $this->load->view('home');
  		redirect(base_url().'admin/meus-anuncios', 'refresh');
	}
	public function meusAnuncios(){
		
        $this->load->helper('url');
		$this->load->model('anunciante');
		$this->load->model('anunciante_pessoa_fisica','anunciantePF');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));

        $this->load->view('home');
	}
	public function novoAnuncio(){
		
        $this->load->helper('url');
		$this->load->model('anunciante');
		$this->load->model('anunciante_pessoa_fisica','anunciantePF');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));

        $this->load->view('home');
	}
	public function perguntas(){
		
        $this->load->helper('url');
		$this->load->model('anunciante');
		$this->load->model('anunciante_pessoa_fisica','anunciantePF');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));

        $this->load->view('home');
	}
	public function relatorios(){
		
        $this->load->helper('url');
		$this->load->model('anunciante');
		$this->load->model('anunciante_pessoa_fisica','anunciantePF');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));

        $this->load->view('home');
	}
	public function upgrade(){
		
        $this->load->helper('url');
		$this->load->model('anunciante');
		$this->load->model('anunciante_pessoa_fisica','anunciantePF');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));

        $this->load->view('home');
	}
	public function meusDados(){
		
        $this->load->helper('url');
		$this->load->model('anunciante');
		$this->load->model('anunciante_pessoa_fisica','anunciantePF');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));

        $this->load->view('home');
	}
	public function alterarSenha(){
		
        $this->load->helper('url');
		$this->load->model('anunciante');
		$this->load->model('anunciante_pessoa_fisica','anunciantePF');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));

        $this->load->view('home');
	}

	public function logout(){
	   $this->session->unset_userdata('logged');
	   $this->session->unset_userdata('id_login');
	   redirect('login', 'refresh');
	}

	
	

	
	
	
	

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */