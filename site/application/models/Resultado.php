<?php

class Resultado extends CI_Model {

    private $tabla; 
    
    public function __construct() {
        parent::__construct();
        $this->tabla = 'resultado';
    }

    public function insertar($resultado){
        return $this->db->insert($this->tabla, $resultado);
    }

    public function get_resumen($cedula){
        // Warning: puede que no obtenga todas las areas
        $sql = "select
                    r.id_area,
                    ai.nombre,
                    r.numero
                from
                    area_interes ai,
                    resultado r
                where
                    ai.id_area = r.id_area and
                    r.cedula = '$cedula'
                order by r.numero desc;";
		return $this->db->query($sql);
    }

}