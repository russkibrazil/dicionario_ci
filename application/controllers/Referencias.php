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
                //$data['usuario'] = $this->usuario_model->get_user();
        }

        public function view($r = NULL)
        {
                $data['referen_item'] = $this->referencia_model->get_referencia($r);
        }
}