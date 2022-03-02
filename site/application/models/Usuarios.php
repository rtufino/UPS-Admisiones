<?php

class Usuarios extends CI_Model {

    private $tabla; 
    
    public function __construct() {
        parent::__construct();
        $this->tabla = 'usuarios';
    }

    public function getAllUsers(){
        $this->db->select('nombre');
		$this->db->order_by('nombre');
        //$this->db->limit(10);
		return $this->db->get($this->tabla);
    }

    public function insertar($user){
        return $this->db->insert($this->tabla, $user);
    }

    public function get_by_user($user,$psw){

        $sql = "select usuario from usuarios where usuario = '$user' AND psw = '$psw';";
		return $this->db->query($sql);
        //$this->db->where('usuario=',$user,'AND psw=',$psw);
        //return $this->db->get($this->tabla);
        
    }

    public function can_login($username, $password){
        $this->db->where('usuario', $username);
        $this->db->where('psw', $password);
        $query = $this->db->get('usuarios');

        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }

    }

}