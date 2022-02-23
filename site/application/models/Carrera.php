<?php

class Carrera extends CI_Model {

    private $tabla; 
    
    public function __construct() {
        parent::__construct();
        $this->tabla = 'carrera';
    }

    public function get_by_id($id){
        $this->db->where('id_carrera=',$id);
        return $this->db->get($this->tabla)->result()[0];
    }

}