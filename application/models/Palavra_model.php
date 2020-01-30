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

        public function create_palavra($plv){
                $this->load->helper('url');
                $data = array(
                        'Lema' => $this->input->post('lema'),
                        'ClasseGram' => $this->input->post('classe_gramatica'),
                        'Idioma' => $this->input->post('idioma'),
                        'notas_gramatica' => $this->input->post('notas_gramatica'),
                        'notas_cultura' => $this->input->post('notas_cultura'),
                        'Genero' => $this->input->post('genero'),
                        'Definicao' => $this->input->post('definicao'),
                        'Sublema' => $this->input->post('sublema')
                );
                return $this->db->insert('palavra', $data);
        }

        public function update_user($plv){
                $this->load->helper('url');
                $data = array(
                        'Lema' => $this->input->post('lema'),
                        'ClasseGram' => $this->input->post('classe_gramatica'),
                        'Idioma' => $this->input->post('idioma'),
                        'notas_gramatica' => $this->input->post('notas_gramatica'),
                        'notas_cultura' => $this->input->post('notas_cultura'),
                        'Genero' => $this->input->post('genero'),
                        'Definicao' => $this->input->post('definicao'),
                        'Sublema' => $this->input->post('sublema')
                );
                return $this->db->update('palavra', $data, array('Id' => $plv));
        }

        public function delete_palavra($id_p){
                $this->db->delete('palavra', array('Id' => $id_p));
        }
}