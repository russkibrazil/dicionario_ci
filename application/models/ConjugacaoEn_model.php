<?php
class ConjugacaoEn_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_ConjugacaoEn($id)
	{     
		$query = $this->db->get_where('conjugacaoEn', array('idPalavra' => $id));
		return $query->row_array();
	}

	public function get_mixed_ConjugacaoEn($lookup){
		$this->db->where_in('idPalavra', $lookup);
		$query = $this->db->get('conjugacaoEn');
		return $query->result_array();
	}

	public function update_ConjugacaoEn($id){
		$this->load->helper('url');
		$data = array(
			'ConstrPresente' => $this->input->post('cpresente'),
			'ExPresente' => $this->input->post('epresente'),
			'ConstrPassado' => $this->input->post('cpassado'),
			'ExPassado' => $this->input->post('epassado'),
			'ConstrWill' => $this->input->post('cwill'),
			'ExWill' => $this->input->post('ewill'),
			'ConstrGoingTo' => $this->input->post('cgoingto'),
			'ExGoingTo' => $this->input->post('egoingto'),
			'ConstrPresPer' => $this->input->post('cpresper'),
			'ExPresPer' => $this->input->post('epresper'),
			'ConstrPasPer' => $this->input->post('cpasper'),
			'ExPasPer' => $this->input->post('epasper'),
			'ConstrPresCon' => $this->input->post('cprescon'),
			'ExPresCon' => $this->input->post('eprescon'),
			'ConstrPasCon' => $this->input->post('cpascon'),
			'ExPasCon' => $this->input->post('epascon'),
		);
		$this->db->update('usr', $data, array('idPalavra' => $id));
	}
}