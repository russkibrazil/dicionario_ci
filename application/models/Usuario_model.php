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

	public function create_user(){
		$this->load->helper('url');
		$data = array(
			'usr' => $this->input->post('usuario'),
			'pass' => $this->input->post('senha'),
			'nivel_permissao' => $this->input->post('acesso'),
			'email' => $this->input->post('email'),
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'telefone' => $this->input->post('telefone'),
			'rede_social' => $this->input->post('rede_social')
		);
		
		return $this->db->insert('usr', $data);
	}

	public function update_user($usr){
		$this->load->helper('url');
		$data = array(
			'usr' => $this->input->post('usuario'),
			'pass' => $this->input->post('senha'),
			'nivel_permissao' => $this->input->post('acesso'),
			'email' => $this->input->post('email'),
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'telefone' => $this->input->post('telefone'),
			'rede_social' => $this->input->post('rede_social')
		);
		$this->db->update('usr', $data, array('usr' => $usr));
	}

	public function delete_user($id_usr){
		$this->db->delete('usr', array('usr' => $id_usr));
	}

	public function login ($u, $p){
		$query = $this->db->get_where('usr', array('usr' => $u, 'pass' => $p));
		if ($query->count > 0)
			return $query['nivel_permissao'];
		else
			return false;
	}
}