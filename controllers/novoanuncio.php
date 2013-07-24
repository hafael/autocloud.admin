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
		$this->load->model('TB_ImagensAnuncio','anuncio_imagens');
		$this->anunciante->define($this->session->userdata('id_login'));
		$this->anunciantePF->define($this->session->userdata('id_login'));
		if(!$this->anunciante->logged()){
			redirect(base_url().'login/?redirectURL='.current_url(), 'refresh');
		}
	}

	public function index(){
		
        $this->load->view('escolha-tipo-anuncio');
	}
	public function carro(){

		$this->load->model('TB_AnuncioCarro','anuncio_carro');
		$data['TipoVeiculo'] = 1;

		if($this->input->post('TipoVeiculo')=="1"){

			$titulo_anuncio = $this->input->post('fabricanteText')
							." ".$this->input->post('modeloText')
							." ".$this->input->post('versaoText')
							." ".$this->input->post('combustivel')
							." ".$this->input->post('AnoFabText')
							."/".$this->input->post('AnoModText');

			$array_tb_anuncio = array(
				'TB_Anunciante_id' => $this->anunciante->id,
				'TipoVeiculo' => $this->input->post('TipoVeiculo'),
				'TipoAnuncio' => $this->input->post('TipoAnuncio'),
				'Titulo' => $titulo_anuncio,
				'Descricao' => $this->input->post('descricao'),
				'ValorVenda' => $this->moedas->bra2eua($this->input->post('valor_venda')),
				'TelContato' => $this->input->post('tel_contato'),
                'TB_Estado_id' => $this->input->post('estado'),
                'TB_Estado_Nome' => $this->input->post('EstadoText'),
                'TB_Cidade_id' => $this->input->post('cidade'),
                'TB_Cidade_Nome' => $this->input->post('CidadeText')
			);
			$this->anuncio->adiciona($array_tb_anuncio);

			$array_tb_anuncio_carro = array(
				'TB_Anuncio_id' => $this->anuncio->id,
				'Montadora' => $this->input->post('fabricanteText'),
				'Modelo' => $this->input->post('modeloText'),
				'AnoFab' => $this->input->post('AnoFabText'),
				'AnoMod' => $this->input->post('AnoModText'),
				'Versao' => $this->input->post('versaoText'),
				'TB_FabricanteVeiculo_id' => $this->input->post('fabricante'),
				'TB_ModeloVeiculo_TB_FabricanteVeiculo_id' => $this->input->post('modelo'),
				'TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id' => $this->input->post('anoFab'),
				'TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id' => $this->input->post('anoMod'),
				'TB_VersaoVeiculo_id' => $this->input->post('versao'),
				'ArCondicionado' => (bool)$this->input->post('ar_condicionado'),
				'VidroEletrico' => (bool)$this->input->post('vidro_eletrico'),
				'DirecaoHidraulica' => (bool)$this->input->post('direcao_hidraulica'),
				'AirBag' => (bool)$this->input->post('air_bag'),
				'GasNatural' => (bool)$this->input->post('gas_natural'),
				'Blindado' => (bool)$this->input->post('blindado'),
				'Combustivel' => $this->input->post('combustivel')
			);
			$this->anuncio_carro->adiciona($array_tb_anuncio_carro);

			//$this->anuncio->adiciona($array_insert);

			redirect('novoanuncio/fotos/'.$this->anuncio->id, 'refresh');
		}

		// View tipo carro
		$this->load->view('novo-anuncio', $data);

	}
    public function moto(){

        $this->load->model('TB_AnuncioCarro','anuncio_moto');
        $data['TipoVeiculo'] = 2;

        if($this->input->post('TipoVeiculo')=="2"){

            $titulo_anuncio = $this->input->post('fabricanteText')
                            ." ".$this->input->post('modeloText')
                            ." ".$this->input->post('versaoText')
                            ." ".$this->input->post('combustivel')
                            ." ".$this->input->post('AnoFabText')
                            ."/".$this->input->post('AnoModText');

            $array_tb_anuncio = array(
                'TB_Anunciante_id' => $this->anunciante->id,
                'TipoVeiculo' => $this->input->post('TipoVeiculo'),
                'TipoAnuncio' => $this->input->post('TipoAnuncio'),
                'Titulo' => $titulo_anuncio,
                'Descricao' => $this->input->post('descricao'),
                'ValorVenda' => $this->moedas->bra2eua($this->input->post('valor_venda')),
                'TelContato' => $this->input->post('tel_contato'),
                'TB_Estado_id' => $this->input->post('estado'),
                'TB_Estado_Nome' => $this->input->post('EstadoText'),
                'TB_Cidade_id' => $this->input->post('cidade'),
                'TB_Cidade_Nome' => $this->input->post('CidadeText')
            );
            $this->anuncio->adiciona($array_tb_anuncio);

            $array_tb_anuncio_moto = array(
                'TB_Anuncio_id' => $this->anuncio->id,
                'Montadora' => $this->input->post('fabricanteText'),
                'Modelo' => $this->input->post('modeloText'),
                'AnoFab' => $this->input->post('AnoFabText'),
                'AnoMod' => $this->input->post('AnoModText'),
                'Versao' => $this->input->post('versaoText'),
                'TB_FabricanteVeiculo_id' => $this->input->post('fabricante'),
                'TB_ModeloVeiculo_TB_FabricanteVeiculo_id' => $this->input->post('modelo'),
                'TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id' => $this->input->post('anoFab'),
                'TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id' => $this->input->post('anoMod'),
                'TB_VersaoVeiculo_id' => $this->input->post('versao'),
                'Abs' => (bool)$this->input->post('abs'),
                'Combustivel' => $this->input->post('combustivel')
            );
            $this->anuncio_moto->adiciona($array_tb_anuncio_moto);

            //$this->anuncio->adiciona($array_insert);

            redirect('novoanuncio/fotos/'.$this->anuncio->id, 'refresh');
        }

        // View tipo carro
        $this->load->view('novo-anuncio', $data);

    }

	public function fotos($id_anuncio){

    	

		$this->anuncio->define($id_anuncio);

		
        
        $this->load->view('novo-anuncio-fotos');

	}

	function do_upload($id_anuncio){

    	$this->anuncio->define($id_anuncio);

        // New name
        $new_file_name = md5(date('Y m d H:i:s').uniqid(mt_rand()));

        $upload_conf = array(
            'upload_path'   =>  realpath('../uploads'),
            'allowed_types' => 'gif|jpg|png',
            'max_size'      => '30000',
            'file_name'     => $new_file_name
            );
    
        $this->upload->initialize( $upload_conf );
    
        // Change $_FILES to new vars and loop them
        foreach($_FILES['userfile'] as $key=>$val)
        {
            $i = 1;
            foreach($val as $v)
            {
                $field_name = "file_".$i;
                $_FILES[$field_name][$key] = $v;
                $i++;   
            }
        }
        // Unset the useless one ;)
        unset($_FILES['userfile']);
    
        // Put each errors and upload data to an array
        $error = array();
        $success = array();
        
        // main action to upload each file
        $IndexList = 1;
        foreach($_FILES as $field_name => $file)
        {

            if ( ! $this->upload->do_upload($field_name))
            {
                // if upload fail, grab error 
                $error['upload'][] = $this->upload->display_errors();
            }
            else
            {
                // otherwise, put the upload datas here.
                // if you want to use database, put insert query in this loop
                $upload_data = $this->upload->data();

                
                
                $array_tb_anuncio = array(
					'TB_Anunciante_id' => $this->anunciante->id,
					'TB_Anuncio_id' => $id_anuncio,
					'IndexList' => $IndexList,
					'ImageSRC' => $upload_data['file_name']
				);
                $this->anuncio_imagens->adiciona($array_tb_anuncio);
                $IndexList++;
                //Image resize High

                // set the resize config
                $resize_high = array(
                    // it's something like "/full/path/to/the/image.jpg" maybe
                    'source_image'   => $upload_data['full_path'], 
                    // and it's "/full/path/to/the/" + "thumb_" + "image.jpg
                    // or you can use 'create_thumbs' => true option instead
                    'new_image'      => $upload_data['file_path'].'high_'.$upload_data['file_name'],
                    'width'          => 1000,
                    'height'         => 1000,
                    'maintain_ratio' => TRUE
                    );

                // initializing
                $this->image_lib->initialize($resize_high);

                // do it!
                if ( ! $this->image_lib->resize())
                {
                    // if got fail.
                    $error['resize'][] = $this->image_lib->display_errors();
                }
                else
                {
                    // otherwise, put each upload data to an array.
                    $success[] = $upload_data;
                }


				//Image resize Medium

                // set the resize config
                $resize_medium = array(
                    // it's something like "/full/path/to/the/image.jpg" maybe
                    'source_image'   => $upload_data['full_path'], 
                    // and it's "/full/path/to/the/" + "thumb_" + "image.jpg
                    // or you can use 'create_thumbs' => true option instead
                    'new_image'      => $upload_data['file_path'].'medium_'.$upload_data['file_name'],
                    'width'          => 600,
                    'height'         => 600,
                    'maintain_ratio' => TRUE
                    );

                // initializing
                $this->image_lib->initialize($resize_medium);

                // do it!
                if ( ! $this->image_lib->resize())
                {
                    // if got fail.
                    $error['resize'][] = $this->image_lib->display_errors();
                }
                else
                {
                    // otherwise, put each upload data to an array.
                    $success[] = $upload_data;
                }

                //Image resize thumb

                // set the resize config
                $resize_thumb = array(
                    // it's something like "/full/path/to/the/image.jpg" maybe
                    'source_image'   => $upload_data['full_path'], 
                    // and it's "/full/path/to/the/" + "thumb_" + "image.jpg
                    // or you can use 'create_thumbs' => true option instead
                    'new_image'      => $upload_data['file_path'].'thumb_'.$upload_data['file_name'],
                    'width'          => 200,
                    'height'         => 200,
                    'maintain_ratio' => TRUE
                    );

                // initializing
                $this->image_lib->initialize($resize_thumb);

                // do it!
                if ( ! $this->image_lib->resize())
                {
                    // if got fail.
                    $error['resize'][] = $this->image_lib->display_errors();
                }
                else
                {
                    // otherwise, put each upload data to an array.
                    $success[] = $upload_data;
                }


            }
        }

        // see what we get
        if(count($error > 0))
        {
            $data['error'] = $error;
        }
        else
        {
            $data['success'] = $upload_data;
            //redirect('novoanunciocarro/sucesso/'.$this->anuncio->id, 'refresh');
        }
        
        //$this->load->view('novo-anuncio-carro-sucesso',$data);
        redirect('novoanuncio/sucesso/'.$this->anuncio->id, 'refresh');
    }

    public function sucesso($id_anuncio){


		$this->anuncio->define($id_anuncio);
		
        
		$data['array_imagens'] = $this->anuncio_imagens->lista($this->anunciante->id, $this->anuncio->id);

        $this->load->view('novo-anuncio-sucesso', $data);

	}

	public function get_fabricantes(){
		$this->load->model('TB_FabricanteVeiculo','fabricante');

		header('Content-Type: application/x-json; charset=utf-8');

		echo json_encode($this->fabricante->lista());
		
	}
	public function get_modelos($id){
		$this->load->model('TB_ModeloVeiculo','modelo');

		header('Content-Type: application/x-json; charset=utf-8');

		echo json_encode($this->modelo->lista($id));
		
	}
	public function get_ano_fab($id){
		$this->load->model('TB_AnoFabricacaoVeiculo','anoFab');

		header('Content-Type: application/x-json; charset=utf-8');

		echo json_encode($this->anoFab->lista($id));
		
	}
	public function get_ano_mod($id){
		$this->load->model('TB_AnoModeloVeiculo','anoMod');

		header('Content-Type: application/x-json; charset=utf-8');

		echo json_encode($this->anoMod->lista($id));
		
	}
	public function get_versao($id){
		$this->load->model('TB_VersaoVeiculo','versao');

		header('Content-Type: application/x-json; charset=utf-8');

		echo json_encode($this->versao->lista($id));
		
	}


	
	

	
	
	
	

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */