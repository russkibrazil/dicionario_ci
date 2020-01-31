<?php
class Palavras extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('palavra_model');
			$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['palavras'] = $this->palavra_model->get_palavra();
		$this->load->view('templates/menu_superior');
		$this->load->view('palavras/lista', $data);
	}

	public function ver($plv)
	{
        $data['palavra'] = $this->palavra_model->get_usr($plv);
        $data['equivalentes'] = $this->equivalente_model->get_equivalente();
        $data['fraseologia'] = $this->fraseologia_model->get_frase();
        
        $this->load->view('templates/menu_superior');
		$this->load->view('palavras/ver', $data);
	}

	public function criar()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

        $this->form_validation->set_rules('lema', 'Nome de usuário', 'required|alpha');
        $this->form_validation->set_rules('sublema', 'Sub Lema', 'alpha');
        $this->form_validation->set_rules('classe_gramatical', 'Classe Gramatical', 'required');
        $this->form_validation->set_rules('genero', 'Gênero', 'required');
        $this->form_validation->set_rules('idioma', 'Idioma', 'required');
        $this->form_validation->set_rudles('definicao', 'Definição', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('notas_cultura', 'Notas Culturais', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('notas_gramatica', 'Notas Gramaticais', 'alpha_numeric_spaces');

		if ($this->form_validation->run() === FALSE)
		{
			$salvo = false;
			$this->load->view('templates/menu_superior');
			$this->load->view('palavras/criar', [$salvo]);
		}
		else
		{
			$salvo = true;
			$this->palavra_model->create_palavra();
			$this->load->view('templates/menu_superior');
			$this->load->view('palavras/criar', [$salvo]);
		}
	}

	public function editar($usr){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['palavra'] = $this->palavra_model->get_palavra($usr);

        $this->form_validation->set_rules('lema', 'Nome de usuário', 'required|alpha');
        $this->form_validation->set_rules('sublema', 'Sub Lema', 'alpha');
        $this->form_validation->set_rules('classe_gramatical', 'Classe Gramatical', 'required');
        $this->form_validation->set_rules('genero', 'Gênero', 'required');
        $this->form_validation->set_rules('idioma', 'Idioma', 'required');
        $this->form_validation->set_rudles('definicao', 'Definição', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('notas_cultura', 'Notas Culturais', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('notas_gramatica', 'Notas Gramaticais', 'alpha_numeric_spaces');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/menu_superior');
			$this->load->view('palavras/editar', $data);
		}
		else
		{
			$this->palavra_model->update_palavra($usr);
			$data['palavra'] = $this->palavra_model->get_palavra();
			$this->load->view('templates/menu_superior');
			$this->load->view('palavras/lista', $data);
		}
	}
	public function delete_palavra($usr){
		$this->palavra_model->apagar($usr);
    }
}