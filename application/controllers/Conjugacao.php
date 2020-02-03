<?php
class Conjugacao extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index($id, $lng){
        switch ($lng){
            case 'PT':
                $this->editarPt($id);
            break;
            case 'EN':
                $this->editarEn($id);
            break;
            /*case 'ES':
                $this->editarEs($id);
            break;*/
            default:
                throw new Exception("Error Processing Request", 1);
            break;
        }
    }
    public function editarPt($id){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('conjugacaopt_model');

        $data['conjugacao'] = $this->conjugacao_model->get_conjuga_pt($id);

        $this->form_validation->set_rules('cpresente', 'Construção Verbal Presente', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('epresente', 'Exemplos Presente', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cpretimp', 'Construção Verbal Pretérito Imperfeito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('epretimp', 'Exemplos Pretérito Imperfeito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cpretper', 'Construção Verbal Pretérito Perfeito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('epretper', 'Exemplos Pretérito Perfeito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cfutpres', 'Construção Verbal Futuro do Presente', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('efutpres', 'Exemplos Futuro do Presente', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cfutpret', 'Construção Verbal Futuro do Pretérito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('efutpret', 'Exemplos Futuro do Pretérito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cinfpessoal', 'Construção Verbal Infinitivo Pessoal', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('einfpessoal', 'Exemplos Infinitivo Pessoal', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cparticipio', 'Construção Verbal Particípio', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('eparticipio', 'Exemplos Particípio', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cgerundio', 'Construção Verbal Gerúndio', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('egerundio', 'Exemplos Gerúndio', 'alpha_numeric_spaces');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/menu_superior');
            $this->load->view('pages/palavra/conjugacao/editar_pt', $data);
        }
        else
        {
            $this->conjugacao_model->update_conjugacao($id);
            redirect('palavras/'.$id);
        }
    }
    public function editarEn($id){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('conjugacaoen_model');

        $data['conjugacao'] = $this->conjugacao_model->get_conjuga_en($id);

        $this->form_validation->set_rules('cpresente', 'Construção Verbal Presente', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('epresente', 'Exemplos Presente', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cpassado', 'Construção Verbal Passado', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('epassado', 'Exemplos Passado', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cwill', 'Construção Verbal Will', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('ewill', 'Exemplos Will', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cgoingto', 'Construção Verbal Going To', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('egoingto', 'Exemplos Going To', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cpresper', 'Construção Verbal Presente Perfeito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('epresper', 'Exemplos Presente Perfeito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cpasper', 'Construção Verbal Passado Perfeito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('epasper', 'Exemplos Passado Perfeito', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cprescon', 'Construção Verbal Presente Contínuo', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('eprescon', 'Exemplos Presente Contínuo', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('cpascon', 'Construção Verbal Passado Contínuo', 'alpha_numeric_spaces');
        $this->form_validation->set_rules('epascon', 'Exemplos Passado Contínuo', 'alpha_numeric_spaces');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/menu_superior');
            $this->load->view('pages/palavra/conjugacao/editar_en', $data);
        }
        else
        {
            $this->conjugacao_model->update_conjugacao($id);
            redirect('palavras/'.$id);
        }
    }
    public function editarEs($id){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('conjugacaoes_model');

        /*$data['conjugacao'] = $this->usuario_model->get_user($id);

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
            $this->load->view('pages/palavra/conjugacao/editar_es', $data);
        }
        else
        {
            $this->usuario_model->update_user($id);
        }*/
    }
}