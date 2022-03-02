<?php

class Aspirante extends CI_Model {

    private $tabla; 
    
    public function __construct() {
        parent::__construct();
        $this->tabla = 'aspirante';
    }

    public function insertar($aspirante){
        return $this->db->insert($this->tabla, $aspirante);
    }

    public function get_by_cedula($cedula){
        $this->db->where('cedula=',$cedula);
        return $this->db->get($this->tabla);
    }

    public function getAllAspirantes(){
        
    }

}