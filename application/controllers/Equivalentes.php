<?php
class Equivalentes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('equivalente_model');
		$this->load->helper('url_helper');
		if (! $this->session->userdata['logged_in']) {
			redirect('/login');
			return false;
		}
	}

	public function index($origem)
	{
		$data['equivalentes'] = $this->equivalente_model->get_equivalente($origem);
		$this->load->view('templates/menu_superior');
		$this->load->view('pages/palavra/equivalentes/lista', $data);
	}

	public function view($usr = NULL)
	{
			//$data['usr_item'] = $this->usuario_model->get_usr($usr);
	}

	public function criar($o)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('equivalente', 'Lema Equivalente', 'required');
		$this->form_validation->set_rules('napresentacao', 'Número de Apresentação', 'required|is_natural');
		$this->form_validation->set_rules('heterogenerico', 'Heterogenérico');
		$this->form_validation->set_rules('hetetotonico', 'Heterotônico');
		$this->form_validation->set_rules('heterossemantico', 'Heterossemântico');
		$this->form_validation->set_rules('exemplo', 'Exemplo de Uso', '');
		$this->form_validation->set_rules('exemplot', 'Exemplo Traduzido', '');
		$this->form_validation->set_rules('marcauso', 'Marca de Uso', '');
		$this->form_validation->set_rules('notas_gramatica', 'Notas Gramaticais', '');
		$this->form_validation->set_rules('notas_cultura', 'Notas Culturais', '');

		if ($this->form_validation->run() === FALSE)
		{
			$salvo = false;
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/palavra/equivalentes/criar', [$salvo]);
		}
		else
		{
			$salvo = true;
			$this->equivalente_model->create_equivalente($o);
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/palavra/equivalentes/criar', [$salvo]);
		}
	}

	public function editar($o, $e){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['equivalente'] = $this->equivalente_model->get_equivalente($o,$e);

		$this->form_validation->set_rules('equivalente', 'Lema Equivalente', 'required');
		$this->form_validation->set_rules('napresentacao', 'Número de Apresentação', 'required|is_natural');
		$this->form_validation->set_rules('heterogenerico', 'Heterogenérico');
		$this->form_validation->set_rules('hetetotonico', 'Heterotônico');
		$this->form_validation->set_rules('heterossemantico', 'Heterossemântico');
		$this->form_validation->set_rules('exemplo', 'Exemplo de Uso', '');
		$this->form_validation->set_rules('exemplot', 'Exemplo Traduzido', '');
		$this->form_validation->set_rules('marcauso', 'Marca de Uso', '');
		$this->form_validation->set_rules('notas_gramatica', 'Notas Gramaticais', '');
		$this->form_validation->set_rules('notas_cultura', 'Notas Culturais', '');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/palavra/equivalentes/editar', $data);
		}
		else
		{
			$this->equivalente_model->update_equivalente($o,$e);
			$data['equivalente'] = $this->equivalente_model->get_equivalente();
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/palavra/equivalentes/lista', $data);
		}
	}
	public function delete_equivalente($o, $e){
		$this->equivalente_model->apagar($o, $e);
	}
}