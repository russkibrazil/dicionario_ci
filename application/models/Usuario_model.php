<?php
class Usuario_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_user($usr = FALSE)
	{
		if ($usr === FALSE)
		{
			$query = $this->db->get('usr');
			return $query->result_array();
		}

		$query = $this->db->get_where('usr', array('usr' => $usr));
		return $query->row_array();
	}

	public function set_user($usr = FALSE){
		$query = $this->db->get_where('usr', array('usr' => $usr));
		return $query->row_array();
	}
	public function set_news()
	{
		$this->load->helper('url');
		$data = array(
			'usr' => $this->input->post('usuario'),
			'pass' => $this->input->post('senha'),
			'nivel_permissao' => $this->input->post('acesso'),
			'email' => $this->input->post('email'),
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'telefone' => $this->input->post('telefone'),
			'telefone' => $this->input->post('rede_social')
		);
		
		return $this->db->insert('usr', $data);
	}

}