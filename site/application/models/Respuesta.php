<?php

class Respuesta extends CI_Model {

    private $tabla; 
    
    public function __construct() {
        parent::__construct();
        $this->tabla = 'respuesta';
    }

    public function insertar($respuesta){
        return $this->db->insert($this->tabla, $respuesta);
    }

    public function get_resultado($cedula){
        // Warning: puede que no obtenga todas las areas
        $sql = "select id_area, sum(valor) as sum from respuesta where cedula = '$cedula' group by id_area;";
		return $this->db->query($sql);
    }

}