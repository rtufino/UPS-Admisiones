  <?php require 'admin-header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>

    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-10">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">


                <div class="card-body">
                  <h5 class="card-title">Encuestadas </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6> 
                        <?php foreach($encuestados as $row){echo $row->total;}?>
                      </h6>
                      <span class="text-success small pt-1 fw-bold">Personas</span> 
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Customers Card -->
            <div class="col-xxl-6 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">No participan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6> 
                        <?php foreach($noacepta as $row){echo $row->total_noacepta;}?>
                    </h6>
                      <span class="text-danger small pt-1 fw-bold">Personas</span>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->



          <div class="col-lg-12">
          <div class="card">
              <div class="card-body pb-0">
                <h5 class="card-title">Género de Aspirantes</h5>

                <div id="trafficChart" style="min-height: 200px;" class="echart"></div>

              </div>
            </div><!-- End Website Traffic -->
          </div>



          <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Profesiograma (Áreas de Intereses más puntuadas)</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" class="chartjs" style="max-height: 400px;"></canvas>

              <!-- End Bar CHart -->

            </div>
          </div>
        </div>


            <!-- Profesiograma -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                <h5 class="card-title">Personas Encuestadas</h5>
                  <p>Lista de personas encuestadas en el formulario </p>
                    <table class="table datatable table-borderless table-responsive" style="font-size: 14px;">
                    <thead>
                      <tr>
                        <th style="text-align: center;" scope="col">Cédula</th>
                        <th style="text-align: center;" scope="col">Nombres</th>
                        <th style="text-align: center;" scope="col">Apellidos</th>
                        <th style="text-align: center;" scope="col">Ciudad</th>
                        <th style="text-align: center;" scope="col">Carrera</th>
                        <th style="text-align: center;" scope="col">Fecha</th>
                        <th style="text-align: center;" scope="col">Resultados</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php foreach($resultado_general as $row){
                        echo "<tr>";
                        echo "<td>$row->cedula</td>";
                        echo "<td>$row->nombres</td>";
                        echo "<td>$row->apellidos</td>";
                        echo "<td>$row->ciudad</td>";
                        echo "<td>$row->nombre</td>";
                        echo "<td>$row->fecha</td>";
                        echo "<td style='text-align:center' class='img-fluid'><a target='_blank' 
                        href='resultadosUsuarios?aspirante=$row->cedula' 
                        class='btn-success btn-block' style='color:white; 
                        text-align:center;padding:4px 9px 4px 9px' >Abrir</a></td>";         
                        echo "</tr>";}?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

  

      </div>
    </section>

  </main><!-- End #main -->

  <script>
                  var ctx2 = document.getElementById('barChart');
                  var barChart = new Chart(ctx2, {
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
                        label: 'Puntajes',
                        data: [
                          <?php
                            foreach($resultado  as $row){
                                echo "$row->sum,";
                            }
                            ?>
                        ],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
              
              </script>

          <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: 'item'
                      },
                      legend: {
                        top: '-2%',
                        left: 'center'
                      },
                      series: [{
                        name: 'Número de: ',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                          show: false,
                          position: 'center'
                        },
                        emphasis: {
                          label: {
                            show: true,
                            fontSize: '15',
                            fontWeight: 'bold'
                          }
                        },
                        labelLine: {
                          show: false
                        },
                        data: [
                          {
                            value: 
                          <?php
                            foreach($masculino  as $row){echo "$row->total_masculino";}
                          ?>,
                            name: 'Hombres'
                          },
                          {
                            value: 
                          <?php
                            foreach($femenino  as $row){echo "$row->total_femenino";}
                          ?>,
                            name: 'Mujeres'
                          }
                        ],
                
                      }]
                    });
                  });
                </script>

  <?php require 'admin-footer.php'; ?>