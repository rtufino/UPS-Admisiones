<?php include 'header.php'; ?>

<form action="<?php echo site_url("encuesta/procesar"); ?>" method="POST">

    <div class="row">
      
        <div class="col-md-12 text-center">
        
            <h3 style="font-weight:bold;"><img src="<?php echo base_url(); ?>static/logo2.png" class="rounded mx-auto d-block" alt="UPS" width="80px" style="margin-bottom: 1rem;">  Universidad Politécnica Salesiana</h3>
            <h4 style="font-weight:bold">CENTRO PSICOLÓGICO “PADRE EMILIO GAMBIRASIO”</h4>
            
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <p>
                    <h5 style="font-weight:bold; text-align: center;margin-bottom: 1rem;">PERFIL DE INTERESES PROFESIONALES</h5>
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
                <div class="card-header" style="background-color: rgb(17 107 32 / 27%);">
                    <h6>Datos informativos </h6>
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
                        <div class="form-group col-md-4">
                            <label class="control-label requiredField" for="inTipoCarrera">¿Que le interesaría estudiar?</label>            
                            <select name="inTipoCarrera" class="custom-select" required>
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Tecnologica">Carrera tecnológica</option>
                                <option value="Universitaria">Carrera universitaria</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label requiredField" for="inCursoPrevio">¿Cursó previamente alguna carrera universitaria de la cual se retiró?</label>
             
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inCursoPrevio1" name="inCursoPrevio" class="custom-control-input"
                                    value="1" onchange="radio1(this);">
                                <label class="custom-control-label" for="inCursoPrevio1">Si</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inCursoPrevio2" name="inCursoPrevio" class="custom-control-input"
                                    value="0" onchange="radio1(this);" required >
                                <label class="custom-control-label" for="inCursoPrevio2">No</label>
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label requiredField" for="inMotivo">Si su respuesta a la anterior pregunta fue SI, seleccione cuál fue el motivo</label>
                            <select name="inMotivo" class="custom-select" id="inMotivo" onchange="Motivo()" >
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Problemas-económicos">Problemas económicos</option>
                                <option value="Cupo-designado">Cupo designado por el Examen Nacional de Admisiones</option>
                                <option value="Nocumplio-expectativas">La carrera no cumplió con sus expectativas </option>
                                <option value="Otro-motivo">Otro Motivo</option>
                            </select>
                            <input class="form-control" id="otroMotivo" name="otroMotivo" type="text" style="display:none" placeholder="¿Cual es su motivo?" />
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
                                <?php $i = 1; $texto = '';foreach($carreras as $c){
                                        $texto .= '<option value="'.$c->id_carrera.'">'.$c->nombre.'</option>';
                                        $i++;}echo ($texto)?>        
                            </select>
                        </div>






                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inSeguro">¿Te sientes seguro de la carrera
                                que quieres estudiar?</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inSeguro1" name="inSeguro" class="custom-control-input"
                                    value="1" onchange="radio2(this);">
                                <label class="custom-control-label" for="inSeguro1">Si</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inSeguro2" name="inSeguro" class="custom-control-input"
                                    value="0" onchange="radio2(this);" required>
                                <label class="custom-control-label" for="inSeguro2">No</label>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="control-label requiredField" for="inMotivo2">Si su respuesta fue NO, indique los motivos </label>
                            <select name="inMotivo2" class="custom-select" id="inMotivo2" onchange="Motivo2()" >
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Desconocimiento-oferta-academica">Desconocimiento de la oferta educativa</option>
                                <option value="Desconocimiento-malla-curricular">Desconocimiento de la malla curricular de la carrera</option>
                                <option value="Falta-interes-vocacional">Falta de identificación de intereses vocacionales</option>
                                <option value="Falta-habilidades-cognitivas">Falta de identificación de habilidades cognitivas</option>
                                <option value="Falta-rasgos-personalidad">Falta de identificación de rasgos de la personalidad</option>
                                <option value="Otro-motivo">Otro Motivo</option>
                            </select>
                            <input class="form-control" id="otroMotivo2" name="otroMotivo2" type="text" style="display:none"  placeholder="¿Cual es su motivo?" />
                            
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label class="control-label requiredField" for="inOpc">Considera que la Universidad Politécnica Salesiana es una buena opción para sus estudios universitarios </label>
                        <div class="custom-control custom-radio">
                                <input type="radio" id="inOpcion1" name="inOpcion" class="custom-control-input"
                                    value="0" onchange="handleChange(this);" required>
                                <label class="custom-control-label" for="inOpcion1">No</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="inOpcion2" name="inOpcion" class="custom-control-input"
                                    value="1" onchange="handleChange(this);">
                                <label class="custom-control-label" for="inOpcion2">Si</label>
                        </div>
                        <div id="block-op1" style="display:none">
                            <select name="inOpc" class="custom-select" id="inOpc">
                                <option disabled selected value> -- Selecciona una opción -- </option>
                                <option value="Nivel-academico">Nivel académico</option>
                                <option value="Nivel-social">Nivel social</option>
                                <option value="Recomendacion">Recomendación de familiares o amigos</option>
                                <option value="Becas-educativas">Becas educativas</option>
                                <option value="Practicas-comunitarias">Prácticas comunitarias y preprofesionales </option>
                                <option value="Laboratorios-experimentacion">Laboratorios de experimentación y práctica </option>
                                <option value="Proyectos-investigacion">Proyectos de investigación con participación estudiantil </option>
                            </select>
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
    <div class="row" >
        <div class="col-md-12" style="align-content: center; justify-content: center ;display:flex" >
            <div class="form-group" >
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block btn-send" >Enviar</button>
            </div>
        </div>
    </div>
</form>

<?php include 'login-modal.php'; ?>

<?php include 'footer.php'; ?>