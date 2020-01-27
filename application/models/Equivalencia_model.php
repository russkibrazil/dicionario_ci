<?php
class Equivalencia_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_equivalencias($eqv = FALSE)
        {
            if ($eqv === FALSE)
            {
                    $query = $this->db->get('equivalencia');
                    return $query->result_array();
            }

            $query = $this->db->get_where('equivalencia', array('idPalavra' => $eqv));
            return $query->row_array();
        }
}