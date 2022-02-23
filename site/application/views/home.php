<?php include 'header.php'; ?>

<form action="<?php echo site_url("encuesta/procesar"); ?>" method="POST">

    <div class="row">
        <div class="col-md-1 ">
            <img src="<?php echo base_url(); ?>static/logo.png" class="rounded mx-auto d-block" alt="UPS" width="100px">
        </div>
        <div class="col-md-11 text-center">
            <h3>Universidad Politécnica Salesiana</h3>
            <h4>CENTRO PSICOLÓGIO “PADRE EMILIO GAMBIRASIO”</h4>
            <h5>PERFIL DE INTERESES PROFESIONALES</h5>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <p>
                        La Universidad Politécnica Salesiana sede Quito se encuentra desarrollando un proyecto de
                        investigación sobre la orientación vocacional-profesional, en esta investigación se pretende
                        desarrollar instrumentos propios que permitan un acercamiento
                        a la realidad ecuatoriana. La información recolectada será utilizada para fines investigativos.
                    </p>
                    <div class="form-group">
                        <label class="control-label requiredField" for="inAceptar">¿Deseas participar en este
                            estudio?</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="inAceptar1" name="inAceptar" class="custom-control-input" value="Si" required>
                            <label class="custom-control-label" for="inAceptar1">Si acepto participar</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="inAceptar2" name="inAceptar" class="custom-control-input" value="No">
                            <label class="custom-control-label" for="inAceptar2">No acepto participar</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <h6>Datos informativos</h6>
                    Llena la siguiente información con tus datos personales.
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label class="control-label requiredField" for="inCedula">Cédula</label>
                            <input class="form-control" id="inCedula" name="inCedula" type="number" required="" />
                        </div>
                        <div class="form-group col-md-5">
                            <label class="control-label requiredField" for="inNombre">Nombres</label>
                            <input class="form-control" id="inNombre" name="inNombres" type="text" required="" />
                        </div>
                        <div class="form-group col-md-5">
                            <label class="control-label requiredField" for="inApellido">Apellidos</label>
                            <input class="form-control" id="inApellido" name="inApellidos" type="text" required="" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label class="control-label requiredField" for="inEdad">Edad</label>
                            <input class="form-control" id="inEdad" name="inEdad" type="number" required="" />
                        </div>
                        <div class="form-group col-md-2">
                            <label class="control-label requiredField" for="inSexo">Sexo</label>
                            <select name="inSexo" class="custom-select" required>
                                <option disabled selected value> -- Selecciona -- </option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label requiredField" for="inCiudad">Ciudad de residencia </label>
                            <input class="form-control" id="inCiudad" name="inCiudad" type="text" required="" />
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label requiredField" for="inColegio">Tipo de colegio</label>
                            <select name="inColegio" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Fiscal">Fiscal</option>
                                <option value="Fiscomisional">Fiscomisional</option>
                                <option value="Privado">Privado</option>
                                <option value="Municipal">Municipal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inEmail">Correo electrónico</label>
                            <input class="form-control" id="inEmail" name="inEmail" type="email" required="" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inCarrera">Selecciona la carrera a la que
                                postulas</label>
                            <select name="inCarrera" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="1">Administración de empresas</option>
                                <option value="2">Contabilidad y Auditoria </option>
                                <option value="3">Economía </option>
                                <option value="4">Gerencia y Liderazgo </option>
                                <option value="5">Biomedicina</option>
                                <option value="6">Computación </option>
                                <option value="7">Electricidad</option>
                                <option value="8">Electrónica y Automatización </option>
                                <option value="9">Ingeniería Automotriz</option>
                                <option value="10">Ingeniería Civil </option>
                                <option value="11">Ingeniería Industrial</option>
                                <option value="12">Telecomunicaciones </option>
                                <option value="13">Agropecuaria </option>
                                <option value="14">Biotecnología </option>
                                <option value="15">Gestión de Riesgos y desastres</option>
                                <option value="16">Ingeniería Ambiental</option>
                                <option value="17">Medicina Veterinaria </option>
                                <option value="18">Comunicación </option>
                                <option value="19">Derecho </option>
                                <option value="20">Mecatrónica</option>
                                <option value="21">Mecánica</option>
                                <option value="22">Diseño Multimedia </option>
                                <option value="23">Filosofía </option>
                                <option value="24">Psicología </option>
                                <option value="25">Educación </option>
                                <option value="26">Educación Inicial </option>
                                <option value="27">Educación Básica </option>
                                <option value="28">Pedagogía de la Actividad Física y el Deporte</option>
                                <option value="29">Antropología (carrera en línea)</option>
                                <option value="30">Desarrollo local (carrera en línea)</option>
                                <option value="31">Educación Intercultural bilingüe (carrera en línea)</option>
                                <option value="32">Teología (carrera en línea)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inSeguro">¿Te sientes seguro de la carrera
                                que quieres estudiar?</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inSeguro1" name="inSeguro" class="custom-control-input"
                                    value="1">
                                <label class="custom-control-label" for="inSeguro1">Si</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inSeguro2" name="inSeguro" class="custom-control-input"
                                    value="0" required>
                                <label class="custom-control-label" for="inSeguro2">No</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inC01">¿Cómo te sientes con respecto a
                                cursar tus estudios universitarios?</label>
                            <select name="inC01" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Seguro">Seguro y decidido</option>
                                <option value="Inseguro">Inseguro y poco confiado</option>
                                <option value="Obligado-padres">Obligado por tus padres</option>
                                <option value="Obligado-economicas-sociales">Obligado por razones económicas y sociales
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inC02">Tengo clara la carrera que deseo
                                estudiar, conozco</label>
                            <select name="inC02" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Objetivo">El objetivo de la carrera</option>
                                <option value="Malla">La malla académica</option>
                                <option value="Campo-laboral">El Campo laboral</option>
                                <option value="Perfil-ingreso">El perfil de ingreso</option>
                                <option value="Perfil-egreso">El perfil de egreso</option>
                                <option value="Tiempo-estudio">Tiempo de estudio</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inC03">¿Quién te recomendó / motivó a
                                escoger la carrera en la que deseas inscribirte?</label>
                            <select name="inC03" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Institución">Institución educativa</option>
                                <option value="Psicologo">Un psicólogo</option>
                                <option value="Familia">Familia</option>
                                <option value="Amigos">Amigos</option>
                                <option value="Conocidos">Conocidos</option>
                                <option value="Propia">Fue una decisión propia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inC04">¿Cuáles de los siguientes factores
                                inciden para estudiar una carrera universitaria?</label>
                            <select name="inC04" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Desarrollo-personal">Desarrollo personal</option>
                                <option value="Remuneracion">Remuneración económica</option>
                                <option value="Estatus-social">Estatus social</option>
                                <option value="Prestigio-familiar">Presión familiar</option>
                                <option value="Presion-amigos">Presión de amigos</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inC05">¿Te has inscrito en una carrera que
                                no cumplió tus expectativas?</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inC051" name="inC05" class="custom-control-input" value="Si" required>
                                <label class="custom-control-label" for="inC051">Si</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inC052" name="inC05" class="custom-control-input" value="No">
                                <label class="custom-control-label" for="inC052">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inC06">La razón por la que se retiró de la
                                carrera fue por:</label>
                            <select name="inC06" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="No-aplica">No aplica</option>
                                <option value="Situacion-economica">Situación económica</option>
                                <option value="Eleccion-equivocada">Elección equivocada</option>
                                <option value="Dificultad-academica">Dificultad académica</option>
                                <option value="Problemas-salud">Problemas de salud</option>
                                <option value="Dificulatades-personales">Dificultades personales</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inC07">Considero que las técnicas y hábitos
                                de estudio que utilizo son:</label>
                            <select name="inC07" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Excelentes">Excelentes</option>
                                <option value="Aceptables">Aceptables</option>
                                <option value="Malas">Malas</option>
                                <option value="Insuficientes">Insuficientes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inC08">Estudiar en la UPS es:</label>
                            <select name="inC08" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Primera-opcion">Primera opción de universidad</option>
                                <option value="Opción-economica">Una opción por la situación económica</option>
                                <option value="Calidad-educativa-social">Una opción por la calidad educativa y social
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inC09">¿Has realizado un proceso de
                                orientación vocacional y profesional anteriormente?</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inC091" name="inC09" class="custom-control-input" value="Si" required>
                                <label class="custom-control-label" for="inC091">Si</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inC092" name="inC09" class="custom-control-input" value="No">
                                <label class="custom-control-label" for="inC092">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <h6>Cuestionario de intereses profesionales</h6>
                    Responde a las siguientes preguntas según el interés que despiertan en ti.
                </div>
                <div class="card-body">
                    <?php
                    $i = 1;
                    $texto = '';
                    foreach($preguntas as $p){
                        if ($i%2 != 0){
                            $texto .= '<div class="form-row">';
                        }
                        $texto .= '<div class="form-group col-md-6">';
                        $texto .= '<label class="control-label requiredField" for="'.$p->id_pregunta.'"><b>'.$i.'.</b> '. $p->enunciado .'</label>';
                        $texto .= '<div class="custom-control custom-radio">';
                        $texto .= '<input type="radio" id="P'.$p->id_pregunta.'-Si" name="P'.$p->id_pregunta.'" class="custom-control-input" value="Si" required>';
                        $texto .= '<label class="custom-control-label" for="P'.$p->id_pregunta.'-Si">Si me interesa</label>';
                        $texto .= '</div>';
                        $texto .= '<div class="custom-control custom-radio">';
                        $texto .= '<input type="radio" id="P'.$p->id_pregunta.'-No" name="P'.$p->id_pregunta.'" class="custom-control-input" value="No" required>';
                        $texto .= '<label class="custom-control-label" for="P'.$p->id_pregunta.'-No">No me interesa</label>';
                        $texto .= '</div>';
                        $texto .= '</div>';
                        if ($i%2 == 0){
                            $texto .= '</div>';
                        }
                        $i++;
                    }
                    echo ($texto)
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </div>
        </div>
    </div>
</form>

<?php include 'footer.php'; ?>