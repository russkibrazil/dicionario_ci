<?php
class Fraseologia_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_fraseologia($id_palavra, $fraseO = FALSE, $fe = FALSE, $fc = FALSE)
	{
		if ($fraseO === FALSE || $fe === FALSE || $fc === FALSE)
		{
			$query = $this->db->get_where('fraseologia', array('IdPalavra' => $id_palavra));
			return $query->result_array();
		}

		$query = $this->db->get_where('fraseologia', array('idPalavra' => $fraseO, 'FraseOrig' => $fraseO, 'FraseEquiv' => $fe, 'Categoria' => $fc));
		return $query->row_array();
	}
	public function create_user($id_palavra){
		$this->load->helper('url');
		$data = array(
			'IdPalavra' => $id_palavra,
			'FraseOrig' => $this->input->post('fraseorig'),
			'FraseEquiv' => $this->input->post('fraseequiv'),
			'ExemploOrig' => $this->input->post('exemploorig'),
			'ExemploEquiv' => $this->input->post('exemploequiv'),
			'NotasCultura' => $this->input->post('notas_cultura'),
			'NotasGramatica' => $this->input->post('notas_gramatica'),
			'Categoria' => $this->input->post('categoria')
		);
		
		return $this->db->insert('fraseologia', $data);
	}

	public function update_user($id_palavra, $fo, $fe, $fc){
		$this->load->helper('url');
		$data = array(
			'FraseOrig' => $this->input->post('fraseorig'),
			'FraseEquiv' => $this->input->post('fraseequiv'),
			'ExemploOrig' => $this->input->post('exemploorig'),
			'ExemploEquiv' => $this->input->post('exemploequiv'),
			'NotasCultura' => $this->input->post('notas_cultura'),
			'NotasGramatica' => $this->input->post('notas_gramatica'),
			'Categoria' => $this->input->post('categoria')
		);
		$this->db->update('fraseologia', $data, array('IdPalavra' => $id_palavra, 'FraseOrig' => $fo, 'FraseEquiv' => $fe, 'Categoria' => $fc));
	}

	public function delete_user($id_palavra, $fo, $fe, $fc){
		$this->db->delete('usr', array('IdPalavra' => $id_palavra, 'FraseOrig' => $fo, 'FraseEquiv' => $fe, 'Categoria' => $fc));
	}
}