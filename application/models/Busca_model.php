<?php
class Busca_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_equivalentes_completo($id){
        $query = $this->db->get_where('MostraPalavraEquivalenciasView', array('Id' => $id));
        return $query->result_array();
    }
}