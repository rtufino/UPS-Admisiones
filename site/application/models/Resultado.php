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

    public function getAllResumen(){

        $sql = "select 
            a.nombres, 
            a.apellidos,
            a.cedula,
            a.ciudad, 
            c.nombre,
            a.fecha,
            a.estado
        from 
            area_interes ai, 
            aspirante a, 
            resultado r, 
            carrera c where ai.id_area = r.id_area 
            and a.cedula = r.cedula 
            and c.id_carrera = a.id_carrera 
            and estado=1 
            GROUP by a.nombres
        order by a.nombres asc;";
        //$this->db->limit(10);
		return $this->db->query($sql);
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

    public function getGroupResultado()
    {
        $sql="select r.id_area, sum(numero) as sum from resultado r group by id_area ORDER by sum(numero) DESC;";
        return $this->db->query($sql);
    }
    

}