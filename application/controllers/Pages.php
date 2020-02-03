<?php
class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('palavra_model');
		$this->load->model('busca_model');
		$this->load->model('fraseologia_model');
		$this->load->model('conjugacaopt_model');
		$this->load->model('conjugacaoen_model');
		$this->load->helper('url_helper');
	}

	public function index(){
		//contém o form de busca
	}

	public function lista_resultados($busca){
		$data['resultados'] = $this->palavra_model->get_palavra_lema($busca);

		$this->load->view('templates/menu_superior');
		$this->load->view('busca/lista', $data);
	}

	public function ver_resultado($id){
		$data['palavra'] = $this->busca_model->get_equivalentes_completo($id);

		$data['conjugacaoPt'] = $this->conjugacaopt_model->get_ConjugacaoPt($id);

		$res = array_column($data['palavra'], 'equivalente');
		$data['conjugacaoEn'] = $this->conjugacaoen_model->get_mixed_ConjugacaoEn($res);

		$data['fraseologia'] = $this->fraseologia_model->get_mixed_fraseologia($res);

		$this->load->view('templates/menu_superior');
		$this->load->view('busca/resultado_blocos', $data);
	}

	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) // ! A estrutura não é a final. Corrigir
		{
				show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/menu_superior', $data);
		$this->load->view('pages/'.$page, $data);
	}
}