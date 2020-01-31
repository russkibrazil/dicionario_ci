<?php
class Equivalente_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_equivalente($origem, $eqv = FALSE)
	{
		if ($eqv === FALSE)
		{
			$query = $this->db->get_where('equivalencias', array('Origem' => $origem));
			return $query->result_array();
		}

		$query = $this->db->get_where('equivalencias', array('Origem' => $origem, 'equivalente' => $eqv));
		return $query->row_array();
	}

	public function create_equivalente($origem){
		$this->load->helper('url');
		$data = array(
			'Origem' => $origem,
            'equivalente' => $this->input->post('equivalente'),
            'heterogenerico' => $this->input->post('heterogenerico'),
			'heterotonico' => $this->input->post('heterotonico'),
			'heterossemantico' => $this->input->post('heterossemantico'),
			'Exemplo' => $this->input->post('exemplo'),
			'Exemplo_Traduzido' => $this->input->post('exemplot'),
			'Referencia' => $this->input->post('referencia'),
            'MarcaUso' => $this->input->post('marcauso'),
            'nApresentacao' => $this->input->post('napresentacao'),
            'NCultural' => $this->input->post('notas_cultura'),
            'NGramatical' => $this->input->post('notas_gramatica')
		);
		
		return $this->db->insert('equivalencias', $data);
	}

	public function update_equivalente($origem, $eqv){
		$this->load->helper('url');
		$data = array(
			//'Origem' => $this->input->post('origem'),
            'equivalente' => $this->input->post('equivalente'),
            'heterogenerico' => $this->input->post('heterogenerico'),
			'heterotonico' => $this->input->post('heterotonico'),
			'heterossemantico' => $this->input->post('heterossemantico'),
			'Exemplo' => $this->input->post('exemplo'),
			'Exemplo_Traduzido' => $this->input->post('exemplot'),
			'Referencia' => $this->input->post('referencia'),
            'MarcaUso' => $this->input->post('marcauso'),
            'nApresentacao' => $this->input->post('napresentacao'),
            'NCultural' => $this->input->post('notas_cultura'),
            'NGramatical' => $this->input->post('notas_gramatica')
		);
		$this->db->update('equivalencias', $data,array('Origem' => $origem, 'equivalente' => $eqv));
	}

	public function delete_equivalente($origem, $eqv){
		$this->db->delete('equivalencias', array('Origem' => $origem, 'equivalente' => $eqv));
	}
}