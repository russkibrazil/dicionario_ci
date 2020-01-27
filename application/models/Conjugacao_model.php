<?php
class Conjugacao_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_ConjugacaoPt($conjP = FALSE)
        {
                if ($conjP === FALSE)
                {
                        $query = $this->db->get('conjugacaoPt');
                        return $query->result_array();
                }
        
                $query = $this->db->get_where('conjugacaoPt', array('idPalavra' => $conjP));
                return $query->row_array();
        }
}