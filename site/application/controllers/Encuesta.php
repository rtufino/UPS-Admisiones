<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encuesta extends CI_Controller {

	public $session = null;

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
		$this->load->model('Usuarios', '', TRUE);
		$this->load->library('form_validation');
		$this->load->library('session');}

	public function index()
	{
        $data['titulo'] = "Inicio | Intereses profesionales";
		$data['preguntas'] = $this->Pregunta->get_all()->result();
		$data['carreras'] = $this->Carrera->getAllCarrera()->result();
		$this->load->view('home', $data);
	}

	//
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->sess_destroy(); 
		redirect(base_url().'encuesta/index');
	}

	public function dashboard()
	{
		$resumen_general = $this->Resultado->getAllResumen()->result();
		$data['resultado_general'] = $resumen_general;

		$resultados = $this->Resultado->getGroupResultado()->result();
		$aspirantes = $this->Aspirante->getAllAspirantes()->result();
		$acepta = $this->Aspirante->getAcepta()->result();
		$noacepta = $this->Aspirante->getNoacepta()->result();
		$aspirante_masculino = $this->Aspirante->getMasculino()->result();
		$aspirante_femenino = $this->Aspirante->getFemenino()->result();

		$data['resultado'] = $resultados;
		$data['encuestados'] = $aspirantes;
		$data['acepta'] = $acepta;
		$data['noacepta'] = $noacepta;
		$data['masculino'] = $aspirante_masculino;
		$data['femenino'] = $aspirante_femenino;

		$data['session']=$this->session->userdata('username');
		//echo $this->session->userdata('username');

		if($this->session->userdata('username') != ''){
			$this->session->set_flashdata('username',$this->session->userdata('username'));
			$this->load->view('admin/index-admin',$data);
		}else{
			redirect(base_url(). 'encuesta/index');
		}
		
		//$this->load->view('admin/index-admin', $data);
	}

	public function usuarios()
	{
		$user= $this->input->post('inUsuario');
		$psw= $this->input->post('inPassword');
		

		/* Verificar si el usuario se encuentra registrado*/
		$consulta = $this->Usuarios->get_by_user($user,$psw);
		//echo $consulta->usuario;
		if ($consulta->num_rows() != 0){
			$this->session->set_flashdata('username',$this->session->userdata('username'));
			$this->load->view('admin/index-admin');
		}else{
			$this->load->view('home');
		}
		//$getUsuario = $this->Aspirante->get_by_cedula($cedula);
	}

	public function login_validation(){
		
		$this->form_validation->set_rules('inUsuario', 'Username', 'required');
		$this->form_validation->set_rules('inPassword', 'Password', 'required');

		if($this->form_validation->run()){
			//true
			$user= $this->input->post('inUsuario');
			$psw= $this->input->post('inPassword');

			//Model Function
			if ($this->Usuarios->can_login($user,$psw)){
				$session_data = array(
					'username' => $user
				);

				$this->session->set_userdata($session_data);
				redirect(base_url(). 'encuesta/dashboard');
			}
			else{
				$this->session->set_flashdata('error','Usuario o Password Invalido');
				redirect(base_url(). 'encuesta/index');
			}
		}else{
			//false
			$this->session->set_flashdata('error', validation_errors());
			redirect('Encuesta/index');
			//$this->index();
		}


	}

	public function tableUsuarios()
	{
			/* Obtener el resumen */
		$resumen = $this->Resultado->getAllResumen()->result();
		$data['resultado'] = $resumen;

		if($this->session->userdata('username') != ''){
			$this->session->set_flashdata('username',$this->session->userdata('username'));
			$this->load->view('admin/usuarios-admin',$data);
		}else{
			redirect(base_url(). 'encuesta/index');
		}

	}

	public function resultadosUsuarios(){
		
		$cedula = $this->input->get('aspirante');
		
		$aspirante = $this->Aspirante->get_by_cedula($cedula)->result()[0];
	
			/* Obtener el resumen */
		$resumen = $this->Resultado->get_resumen($cedula)->result();
		/* Obtener la carrera */
		$carrera = $this->Carrera->get_by_id($aspirante->id_carrera);
		/* Mostrar los resultados */
		$data['resultado'] = $resumen;
		$data['aspirante'] = $aspirante;
		$data['carrera'] = $carrera->nombre;
		$data['titulo'] = "Resultados  | Intereses profesionales";
		$this->load->view('resultado', $data);	
	}

	public function viewCrearUsuario(){
		if($this->session->userdata('username') != ''){
			$this->session->set_flashdata('username',$this->session->userdata('username'));
			$this->load->view('admin/register-admin');
		}else{
			redirect(base_url(). 'encuesta/dashboard');
		}
	}

	public function viewAllUsuarios(){

		$consulta = $this->Usuarios->getAllUsers()->result();
		$data['usuarios']=$consulta;

		if($this->session->userdata('username')){
			$this->session->set_flashdata('username',$this->session->userdata('username'));
			$this->load->view('admin/usuarios-admin',$data);
		}else{
			redirect(base_url(). 'encuesta/index');
		}
	}

	public function crearUsuario(){
		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');
		$estado_admin=1;

		$admin = array (
			'usuario' => $usuario,
			'psw' => $password,
			'estado' => $estado_admin
		);

		$insertar_usuario = $this->Usuarios->insertar($admin);
		if ($insertar_usuario){
			$this->session->set_flashdata('username',$this->session->userdata('username'));
			$this->load->view('admin/index-admin');
		}else{
			$this->session->set_flashdata('error','Usuario no registrado');
			//$this->load->view('admin/register-admin');
			redirect(base_url(). 'encuesta/viewCrearUsuario');
		}

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

		$tipoCarrera = $this->input->post('inTipoCarrera');
		
		$cursoPrevio = $this->input->post('inCursoPrevio');
		$cursoPrevioMotivo = $this->input->post('inMotivo');
		$cursoPrevioOtro = $this->input->post('otroMotivo');


		$correo = $this->input->post('inEmail');
		$carrera = $this->input->post('inCarrera');
		
		$seguro = $this->input->post('inSeguro');
		$seguroMotivo = $this->input->post('inMotivo2');
		$seguroOtro = $this->input->post('otroMotivo2');

		$buenaOpcion = $this->input->post('inOpcion');
		$buenaOpcionSi = $this->input->post('inOpc');


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


		if ($cursoPrevioMotivo == null && $cursoPrevioMotivo == ''){
			$cursoPrevioMotivo = 'Ninguno';
		}

		if ($cursoPrevioOtro == null && $cursoPrevioOtro == ''){
			$cursoPrevioOtro = 'Ninguno';
		}

		if ($seguroMotivo == null && $seguroMotivo == ''){
			$seguroMotivo = 'Ninguno';
		}

		if ($seguroOtro == null && $seguroOtro == ''){
			$seguroOtro = 'Ninguno';
		}

		if ($buenaOpcionSi == null && $buenaOpcionSi == ''){
			$buenaOpcionSi = 'Ninguno';
		}
		
		$estado_aspirante=1;

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
				'tipo_carrera' => $tipoCarrera,
				'curso_previo' => $cursoPrevio,
				'curso_motivo' => $cursoPrevioMotivo,
				'curso_otro' => $cursoPrevioOtro,
				'email' => $correo,
				'id_carrera' => $carrera,
				'seguro_carrera' => $seguro,
				'seguro_motivo' => $seguroMotivo,
				'seguro_otro' => $seguroOtro,
				'buena_opcion' => $buenaOpcion,
				'buena_opcionsi' => $buenaOpcionSi,
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
				'fecha' => date('Y-m-d H:i:s'),
				'estado' => $estado_aspirante,
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
			//echo json_encode($aspirante);
			
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


