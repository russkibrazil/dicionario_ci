<?php
class Referencia_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
        
	public function get_referencia($referencia = FALSE)
	{
        if ($referencia === FALSE)
        {
                $query = $this->db->get('referencias');
                return $query->result_array();
        }

        $query = $this->db->get_where('referencias', array('Cod' => $referencia));
        return $query->row_array();
	}

	public function create_referencia($referencia){
		$this->load->helper('url');
		$data = array(
			'Cod' => $this->input->post('cod'),
			'Descricao' => $this->input->post('descricao'),
			'Ano' => $this->input->post('ano'),
			'Autor' => $this->input->post('autor')
		);
		
		return $this->db->insert('referencias', $data);
	}

	public function update_referencia($cod_ref){
		$this->load->helper('url');
		$data = array(
			'Cod' => $this->input->post('cod'),
			'Descricao' => $this->input->post('descricao'),
			'Ano' => $this->input->post('ano'),
			'Autor' => $this->input->post('autor')
		);
		
		return $this->db->update('referencias', $data, array('Cod' => $cod_ref));
	}

	public function delete_referencia($cod_ref){
		$this->db->delete('referencias', array('Cod' => $cod_ref));
	}
}