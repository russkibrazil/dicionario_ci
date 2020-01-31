<?php
class ConjugacaoPt_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_ConjugacaoPt($id)
	{     
		$query = $this->db->get_where('conjugacaoPt', array('idPalavra' => $id));
		return $query->row_array();
	}

	public function update_ConjugacaoPt($id){
		$this->load->helper('url');
		$data = array(
			'ConstrPresente' => $this->input->post('cpresente'),
			'ExPresente' => $this->input->post('epresente'),
			'ConstrPretImp' => $this->input->post('cpretimp'),
			'ExPretImp' => $this->input->post('epretimp'),
			'ConstrPretPer' => $this->input->post('cpretper'),
			'ExPretPer' => $this->input->post('epretper'),
			'ConstrFutPres' => $this->input->post('cfutpres'),
			'ExFutPres' => $this->input->post('efutpres'),
			'ConstrFutPret' => $this->input->post('cfutpret'),
			'ExFutPret' => $this->input->post('efutpret'),
			'ConstrInfPessoal' => $this->input->post('cinfpessoal'),
			'ExInfPessoal' => $this->input->post('einfpessoal'),
			'ConstrParticipio' => $this->input->post('cparticipio'),
			'ExParticipio' => $this->input->post('eparticipio'),
			'ConstrGerundio' => $this->input->post('cgerundio'),
			'ExGerundio' => $this->input->post('egerundio'),
		);
		$this->db->update('usr', $data, array('idPalavra' => $id));
	}
}