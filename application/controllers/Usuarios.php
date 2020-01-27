<?php
class Usuarios extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('usuario_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                //$data['usuario'] = $this->usuario_model->get_user();
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
                $this->load->view('templates/menu_superior');
                $this->load->view('usuarios/criar');
            }
            else
            {
                $this->usuario_model->set_user();
                $this->load->view('templates/menu_superior');
                $this->load->view('usuarios/criar');
            }
        }
}