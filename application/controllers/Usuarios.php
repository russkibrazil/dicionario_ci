<?php
class Usuarios extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('usuario_model');
			$this->load->helper('url_helper');
			if (! $this->session->userdata['logged_in']) {
				redirect('/login');
				return false;
			}
	}

	public function index()
	{
		$data['usuarios'] = $this->usuario_model->get_user();
		$this->load->view('templates/menu_superior');
		$this->load->view('pages/usuarios/lista', $data);
	}

	public function view($usr = NULL)
	{
			//$data['usr_item'] = $this->usuario_model->get_usr($usr);
	}

	public function criar()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('usuario', 'Nome de usuário', 'required|is_unique[usr_item.usr]');
		$this->form_validation->set_rules('senha', 'Senha', 'required');
		$this->form_validation->set_rules('confirmasenha', 'Confirme a Senha', 'required|matches[senha]');
		$this->form_validation->set_rules('acesso', 'Nível de acesso', 'required');
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
		$this->form_validation->set_rules('cpf', 'CPF', 'required|exact_lenght[11]|numeric|is_natural');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required|is_natural|min_lenght[10]');
		$this->form_validation->set_rules('rede_social', 'Rede Social', '');

		if ($this->form_validation->run() === FALSE)
		{
			$salvo = false;
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/usuarios/criar', [$salvo]);
		}
		else
		{
			$salvo = true;
			$this->usuario_model->create_user();
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/usuarios/criar', [$salvo]);
		}
	}

	public function editar($usr){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['usuario'] = $this->usuario_model->get_user($usr);

		$this->form_validation->set_rules('usuario', 'Nome de usuário', 'required|max_lenght[15]|is_unique[usr_item.usr]');
		$this->form_validation->set_rules('senha', 'Senha', 'required|max_lenght[45]');
		$this->form_validation->set_rules('confirmasenha', 'Confirme a Senha', 'required|matches[senha]');
		$this->form_validation->set_rules('acesso', 'Nível de acesso', 'required');
		$this->form_validation->set_rules('nome', 'Nome', 'required|max_lenght[45]');
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|max_lenght[45]');
		$this->form_validation->set_rules('cpf', 'CPF', 'required|exact_lenght[11]|numeric|is_natural');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required|is_natural|min_lenght[10]|max_lenght[13]');
		$this->form_validation->set_rules('rede_social', 'Rede Social', 'max_lenght[45]');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/usuarios/editar', $data);
		}
		else
		{
			$this->usuario_model->update_user($usr);
			$data['usuarios'] = $this->usuario_model->get_user();
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/usuarios/lista', $data);
		}
	}
	public function delete_user($usr){
		$this->usuario_model->apagar($usr);
	}
}