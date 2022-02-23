<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encuesta extends CI_Controller {


    function __construct()
	{
		parent::__construct();
		/* load helper */
		$this->load->helper(array('url','form'));
		/* modelos */
		$this->load->model('Aspirante', '', TRUE);
		$this->load->model('Pregunta', '', TRUE);
		$this->load->model('Respuesta', '', TRUE);
		$this->load->model('Resultado', '', TRUE);	
		$this->load->model('Carrera', '', TRUE);	
	}

	public function index()
	{
        $data['titulo'] = "Inicio | Intereses profesionales";
		$data['preguntas'] = $this->Pregunta->get_all()->result();
		$this->load->view('home', $data);
	}

	public function procesar()
	{
		/* Obtener los datos del formulario */
		$cedula = $this->input->post('inCedula');
		$nombres = $this->input->post('inNombres');
		$apellidos = $this->input->post('inApellidos');
		$edad = $this->input->post('inEdad');
		$sexo = $this->input->post('inSexo');
		$ciudad = $this->input->post('inCiudad');
		$colegio = $this->input->post('inColegio');
		$correo = $this->input->post('inEmail');
		$carrera = $this->input->post('inCarrera');
		$seguro = $this->input->post('inSeguro');
		$c01 = $this->input->post('inC01');
		$c02 = $this->input->post('inC02');
		$c03 = $this->input->post('inC03');
		$c04 = $this->input->post('inC04');
		$c05 = $this->input->post('inC05');
		$c06 = $this->input->post('inC06');
		$c07 = $this->input->post('inC07');
		$c08 = $this->input->post('inC08');
		$c09 = $this->input->post('inC09');
		$acepta = $this->input->post('inAceptar');
		/* Verificar si el usuario ya registro su encuesta */
		$consulta = $this->Aspirante->get_by_cedula($cedula);
		$ya_lleno = 0;
		$aspirante = null;
		if ($consulta->num_rows() == 0){
			/* Armar el objeto 'aspirante' */
			$aspirante = array (
				'cedula' => $cedula,
				'nombres' => $nombres,
				'apellidos' => $apellidos,
				'edad' => $edad,
				'sexo' => $sexo,
				'ciudad' => $ciudad,
				'colegio' => $colegio,
				'email' => $correo,
				'id_carrera' => $carrera,
				'seguro_carrera' => $seguro,
				'c01' => $c01,
				'c02' => $c02,
				'c03' => $c03,
				'c04' => $c04,
				'c05' => $c05,
				'c06' => $c06,
				'c07' => $c07,
				'c08' => $c08,
				'c09' => $c09,
				'acepta'=> $acepta,
				'fecha' => date('Y-m-d H:i:s')
			);
			/* Guardar datos del 'aspirante' */
			$res = $this->Aspirante->insertar($aspirante);
			if ($res){
				/* Obtener respuestas a las preguntas */
				$preguntas = $this->Pregunta->get_all()->result();
				foreach($preguntas as $row){
					$valor = $this->input->post('P'.$row->id_pregunta);
					/* Determinar el valor de la respuesta */
					if ($valor == "Si"){
						$valor = 1;
					}else{
						$valor = 0;
					}
					/* Armar el objeto 'respuesta' */
					$respuesta = array(
						'id_pregunta' => $row->id_pregunta,
						'id_area' => $row->id_area,
						'cedula' => $cedula,
						'valor' => $valor
					);
					/* Guardar datos de la 'respuesta' */
					$this->Respuesta->insertar($respuesta);
				}
				/* Obtener los resultados */
				$valores = $this->Respuesta->get_resultado($cedula)->result();
				/* Guardar los resultados */
				foreach($valores as $row){
					/* Armar el objeto 'resultado' por cada area */
					$resultado = array(
						'id_area' => $row->id_area,
						'cedula' => $cedula,
						'numero' => $row->sum
					);
					/* Guardar el resultado */
					$this->Resultado->insertar($resultado);
				}
				$aspirante = $this->Aspirante->get_by_cedula($cedula)->result()[0];
			}
		}else{
			$aspirante = $consulta->result()[0];
			$ya_lleno = 1;
		}
		/* Obtener el resumen */
		$resumen = $this->Resultado->get_resumen($cedula)->result();
		/* Obtener la carrera */
		$carrera = $this->Carrera->get_by_id($aspirante->id_carrera);
		/* Mostrar los resultados */
		$data['resultado'] = $resumen;
		$data['aspirante'] = $aspirante;
		$data['carrera'] = $carrera->nombre;
		$data['ya_lleno'] = $ya_lleno;
		$data['titulo'] = "Resultados  | Intereses profesionales";
		$this->load->view('resultado', $data);
		
	}
}