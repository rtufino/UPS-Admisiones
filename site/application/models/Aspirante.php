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
        $sql = "select count(*) total FROM aspirante where estado = 1;";
		return $this->db->query($sql);
    }

    public function getAcepta(){
        $sql = "select count(*) total_acepta from aspirante a where a.acepta = 'Si';";
		return $this->db->query($sql);
    }

    public function getNoacepta(){
        $sql = "select count(*) total_noacepta from aspirante a where a.acepta = 'No' AND estado = 1;";
		return $this->db->query($sql);
    }

    public function getMasculino(){
        $sql = "select count(*) total_masculino from aspirante where sexo = 'Masculino' AND estado = 1;";
		return $this->db->query($sql);
    }

    public function getFemenino(){
        $sql = "select count(*) total_femenino from aspirante where sexo = 'Femenino' AND estado = 1;";
		return $this->db->query($sql);
    }
    
}
