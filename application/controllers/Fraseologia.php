<?php
class Fraseologia extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('fraseologia_model');
			$this->load->helper('url_helper');
	}

	public function index($id)
	{
		$data['fraseologia'] = $this->fraseologia_model->get_frase($id);
		$this->load->view('templates/menu_superior');
		$this->load->view('fraseologia/lista', $data);
	}

	public function view($usr = NULL)
	{
			//$data['usr_item'] = $this->fraseologia_model->get_usr($usr);
	}

	public function criar()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

        $this->form_validation->set_rules('fraseorig', 'Frase Original', 'required|is_unique[usr_item.usr]|alpha_numeric_spaces|max_lenght[100]');
        $this->form_validation->set_rules('fraseequiv', 'Frase Equivalente', 'required|alpha_numeric_spaces|max_lenght[100]');
        $this->form_validation->set_rules('categoria', 'Categoria');
        $this->form_validation->set_rules('exemploorig', 'Exemplo Original','alpha_numeric_spaces|max_lenght[100]');
        $this->form_validation->set_rules('exemploequiv', 'Exemplo Equivalente', 'alpha_numeric_spaces|max_lenght[100]');
        $this->form_validation->set_rules('notas_cultura', 'Notas Culturais', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('notas_gramatica', 'Notas Gramaticais', 'alpha_numeric_spaces');

		if ($this->form_validation->run() === FALSE)
		{
			$salvo = false;
			$this->load->view('templates/menu_superior');
			$this->load->view('fraseologia/criar', [$salvo]);
		}
		else
		{
			$salvo = true;
			$this->fraseologia_model->create_frase();
			$this->load->view('templates/menu_superior');
			$this->load->view('fraseologia/criar', [$salvo]);
		}
	}

	public function editar($id, $fo, $fe, $fc){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['fraseologia'] = $this->fraseologia_model->get_frase($id, $fo, $fe, $fc);

        $this->form_validation->set_rules('fraseorig', 'Frase Original', 'required|is_unique[usr_item.usr]|alpha_numeric_spaces|max_lenght[100]');
        $this->form_validation->set_rules('fraseequiv', 'Frase Equivalente', 'required|alpha_numeric_spaces|max_lenght[100]');
        $this->form_validation->set_rules('categoria', 'Categoria');
        $this->form_validation->set_rules('exemploorig', 'Exemplo Original','alpha_numeric_spaces|max_lenght[100]');
        $this->form_validation->set_rules('exemploequiv', 'Exemplo Equivalente', 'alpha_numeric_spaces|max_lenght[100]');
        $this->form_validation->set_rules('notas_cultura', 'Notas Culturais', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('notas_gramatica', 'Notas Gramaticais', 'alpha_numeric_spaces');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/menu_superior');
			$this->load->view('fraseologia/editar', $data);
		}
		else
		{
			$this->fraseologia_model->update_frase($id, $fo, $fe, $fc);
			$data['fraseologia'] = $this->fraseologia_model->get_frase();
			$this->load->view('templates/menu_superior');
			$this->load->view('fraseologia/lista', $data);
		}
	}
	public function delete_frase($id, $fo, $fe, $fc){
		$this->fraseologia_model->apagar($id, $fo, $fe, $fc);
	}
}