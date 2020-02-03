<?php
class Referencias extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('referencia_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['referencias'] = $this->referencia_model->get_user();
                $this->load->view('templates/menu_superior');
		$this->load->view('pages/referencias/lista', $data);
        }

        public function view($r = NULL)
        {
                $data['referen_item'] = $this->referencia_model->get_referencia($r);
        }

        public function criar(){
                $this->load->helper('form');
                $this->load->library('form_validation');

                $this->form_validation->set_rules('Cod', 'Código de Referência', 'required|regex_match[/^[A-Z]{1,3}[0-9]{2}[a-z]?$/]');
                $this->form_validation->set_rules('Descricao', 'Descrição', 'required|max_lenght[45]');
                $this->form_validation->set_rules('Ano', 'Ano', 'required|regex_match[/^[1-2][0-9]{3}$/]');
                $this->form_validation->set_rules('Autor', 'Autor', 'required|max_lenght[45]');

                if ($this->form_validation->run() === FALSE)
		{
			$salvo = false;
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/referencias/criar', [$salvo]);
		}
		else
		{
			$salvo = true;
			$this->usuario_model->set_user();
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/referencias/criar', [$salvo]);
		}
        }

        public function editar($referencia){
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['referencia'] = $this->referencia_model->get_referencia($referencia);

                $this->form_validation->set_rules('Cod', 'Código de Referência', 'required|regex_match[/regex/]');
                $this->form_validation->set_rules('Descricao', 'Descrição', 'required|max_lenght[45]');
                $this->form_validation->set_rules('Ano', 'Ano', 'required|exact_lenght[4]|is_natural');
                $this->form_validation->set_rules('Autor', 'Autor', 'required|max_lenght[45]');

                if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/referencias/editar', $data);
		}
		else
		{
			$this->usuario_model->set_referencia($referencia);
			$data['referencia'] = $this->usuario_model->get_referencia();
			$this->load->view('templates/menu_superior');
			$this->load->view('pages/referencias/lista', $data);
		}
        }

        public function delete_referencia($referencia){
                $this->referencia_model->delete_referencia($referencia);
        }
}