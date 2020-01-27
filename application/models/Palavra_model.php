<?php
class Palavra_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_palavra($plv = FALSE)
        {
                if ($plv === FALSE)
                {
                        $query = $this->db->get('palavra');
                        return $query->result_array();
                }
        
                $query = $this->db->get_where('palavra', array('lema' => $plv));
                return $query->row_array();
        }
}