<?php

class Pregunta extends CI_Model {

    private $tabla; 
    
    public function __construct() {
        parent::__construct();
        $this->tabla = 'pregunta';
    }
    
    public function get_all(){
        $this->db->select('id_pregunta, id_area, enunciado');
		$this->db->order_by('id_pregunta','asc');
        //$this->db->limit(10);
		return $this->db->get($this->tabla);
    }

}