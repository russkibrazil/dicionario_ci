<?php
class Referencia_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_referencia($referen = FALSE)
{
        if ($referen === FALSE)
        {
                $query = $this->db->get('referencia');
                return $query->result_array();
        }

        $query = $this->db->get_where('referencia', array('Cod' => $referen)); // ? Adicionar outras tabelas?
        return $query->row_array();
}
}