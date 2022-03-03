<?php include 'header.php'; ?>


<div class="row">
        <div class="col-md-12 text-center">
        
            <h3 style="font-weight:bold;"><img src="<?php echo base_url(); ?>static/logo2.png" class="rounded mx-auto d-block" alt="UPS" width="80px" style="margin-bottom: 1rem;">  Universidad Politécnica Salesiana</h3>
            <h4 style="font-weight:bold">CENTRO PSICOLÓGICO “PADRE EMILIO GAMBIRASIO”</h4>
            <h5>PERFIL DE INTERESES PROFESIONALES</h5>
        </div>
</div>
<div class="row mt-3">
    <div class="col-md-4 " >
        
    </div>
    <div class="col-md-4 " >
        <input type="button" value="Imprimir" class="form-control btn-success" onclick="javascript:window.print()" />
    </div>
    <div class="col-md-4 " >
        
    </div>
</div>

<br />
<div class="row">
    <div class="col-md-6" style="margin-top: 10px;">
        <div class="card">
            <div class="card-header" style="background-color: rgb(17 107 32 / 27%);">
                <h6>Datos informativos</h6>
            </div>
            <div class="card-body">
                <p><b>Fecha de evaluación:</b> <?php echo $aspirante->fecha; ?></p>
                <p><b>Cédula de Ciudadanía:</b> <?php echo $aspirante->cedula; ?></p>
                <p><b>Nombre completo:</b> <?php echo "$aspirante->nombres $aspirante->apellidos"; ?></p>
                <p><b>Edad:</b> <?php echo $aspirante->edad; ?> años</p>
                <p><b>Sexo:</b> <?php echo $aspirante->sexo; ?></p>
                <p><b>Ciudad de residencia:</b> <?php echo $aspirante->ciudad; ?></p>
                <p><b>Correo electrónico:</b> <?php echo $aspirante->email; ?></p>
                <p><b>Tipo de Colegio:</b> <?php echo $aspirante->colegio; ?></p>
                <p><b>Carrera a la que postulas:</b> <?php echo $carrera; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-6" style="margin-top: 10px;">
        <div class="card">
            <div class="card-header" style="background-color: rgb(17 107 32 / 27%);">
                <h6>Resultados del cuestionario</h6>
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Área de interés</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Puntaje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($resultado  as $row){
                            echo "<tr>";
                            echo "<td>$row->id_area</td>";
                            echo "<td>$row->nombre</td>";
                            echo "<td>$row->numero</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br />
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-header" style="background-color: rgb(17 107 32 / 27%);">
                <h6>Profesiograma</h6>
            </div>
            <div class="card-body">
                <canvas id="myChart" class="chartjs" width="478" height="200"
                    style="display: block; width: 478px; height: 200px;"></canvas>
            </div>
            <div class="card-footer" style="background-color: rgb(17 107 32 / 27%); font-weight: bold;">
                Tabla de referencia: las puntuaciones obtenidas en el test se agrupan en 3 categorías, siendo estas: de
                0 a 6 puntos = intereses no significativos. De 7 a 12 puntos = intereses medios. De 13 a 18 puntos =
                intereses muy altos.
            </div>
        </div>
    </div>
</div>
<br />
<div class="row">
    <div class="col-sm">
        <div class="card">
            <div class="card-body">
                <p>Se considera positivo un ámbito cuando las puntuaciones oscilan entre medias y muy altas.
                    Si aún tienes inquietudes puedes consultar con un profesional del Centro Psicológico “Padre Emilio
                    Gambirasio” de la UPS. Quito: Centro Psicológico Salesiano Av.12 De Octubre N23-16 Y Wilson.
                    Teléfono: (02) 3962 880 ó al (02) 3962 800 ext. 2220
                </p>
                <p><b>Referencias:</b></p>
                <ul>
                    <li>Angelini A. L. (1984) Inventario de Intereses. México: editorial Trillas.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            <?php
            foreach($resultado  as $row){
                echo "'$row->id_area',";
            }
            ?>
        ],
        datasets: [{
            label: 'Puntaje',
            data: [
                <?php
                foreach($resultado  as $row){
                    echo "$row->numero,";
                }
                ?>
            ],
            backgroundColor: [
                <?php
                foreach($resultado  as $row){
                    if ($row->numero >= 13){
                        echo "'rgba(75, 192, 192, 0.2)',";
                    }else if ($row->numero >= 7) {
                        echo "'rgba(255, 159, 64, 0.2)',";
                    }else {
                        echo "'rgba(255, 99, 132, 0.2)',";
                    }
                }
                ?>
            ],
            borderColor: [
                <?php
                foreach($resultado  as $row){
                    if ($row->numero >= 13){
                        echo "'rgba(75, 192, 192)',";
                    }else if ($row->numero >= 7) {
                        echo "'rgba(255, 159, 64)',";
                    }else {
                        echo "'rgba(255, 99, 132)',";
                    }
                }
                ?>
            ],
            borderWidth: 1,
        }],
    },
    options: {
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true // minimum value will be 0.
                }
            }]
        }
    }
});
</script>

<?php include 'footer.php'; ?>