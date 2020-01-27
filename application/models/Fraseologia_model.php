<?php
class Fraseologia_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_fraseologia($fraseO = FALSE)
        {
                if ($fraseO === FALSE)
                {
                        $query = $this->db->get('fraseologia');
                        return $query->result_array();
                }
        
                $query = $this->db->get_where('fraseologia', array('idPalavra' => $fraseO));
                return $query->row_array();
        }
}