<?php

class Carrera extends CI_Model {

    private $tabla; 
    
    public function __construct() {
        parent::__construct();
        $this->tabla = 'carrera';
    }

    public function getAllCarrera(){
        $this->db->select('id_carrera, nombre');
		$this->db->order_by('nombre');
        //$this->db->limit(10);
		return $this->db->get($this->tabla);
    }

    public function get_by_id($id){
        $this->db->where('id_carrera=',$id);
        return $this->db->get($this->tabla)->result()[0];
    }

}