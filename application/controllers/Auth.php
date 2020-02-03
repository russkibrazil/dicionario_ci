<?php
    class Auth extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('usuario_model');
            $this->load->helper('url_helper');
            if ($this->session->userdata['logged_in']) {
                redirect('/palavra');
                return false;
            }
        }

        public function tentar_login(){
            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('usuario', 'Usuário', 'required|alpha_numeric_spaces');
            $this->form_validation->set_rules('senha', 'Senha', 'required|alpha_numeric_spaces');
            if ($this->form_validation->run() === FALSE){
                $this->load->view('templates/menu_superior');
                $this->load->view('pages/auth');
            }else{
                $this->login($this->input->post('usuario'), $this->input->post('senha'));
            }
        }
        private function login($u, $p){
            $resp = $this->usuario_model->login($u, $p);
            if ($resp !== FALSE ){
                $this->session->set_userdata(array('logged_in' => TRUE, 'nivel' => $resp));
                redirect('/palavra');
            }
            else{
                $this->tentar_login();
            }
        }
        public function logout(){
            $this->session->session_destroy();
            redirect('/busca');
        }
    }