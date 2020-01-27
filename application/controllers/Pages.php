<?php
class Pages extends CI_Controller {

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

