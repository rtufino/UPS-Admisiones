<?php

use LDAP\Result;

 require 'admin-header.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Perfíl de intereses profesionales </h1>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card overflow-auto">
            <div class="card-body img-fluid">
              <h5 class="card-title">Personas Encuestadas</h5>
              <p>Lista de personas encuestadas en el formulario </p>
              <table class="table datatable table-borderless table-responsive">
                <thead>
                  <tr>
                    <th style="text-align: center;" scope="col">Nombre</th>
                    <th style="text-align: center;" scope="col">Apellidos</th>
                    <th style="text-align: center;" scope="col">Cédula</th>
                    <th style="text-align: center;" scope="col">Ciudad</th>
                    <th style="text-align: center;" scope="col">Carrera</th>
                    <th style="text-align: center;" scope="col">Fecha</th>
                    <th style="text-align: center;" scope="col">Resultados</th>
                  </tr>
                </thead>
                <tbody>
              <?php foreach($resultado  as $row){
                    echo "<tr>";
                    echo "<td>$row->nombres</td>";
                    echo "<td>$row->apellidos</td>";
                    echo "<td>$row->cedula</td>";
                    echo "<td>$row->ciudad</td>";
                    echo "<td>$row->nombre</td>";
                    echo "<td>$row->fecha</td>";
                    echo "<td style='text-align:center'><a target='_blank' 
                    href='resultadosUsuarios?aspirante=$row->cedula' 
                    class='btn-success btn-sm btn-block' style='color:white; 
                    text-align:center' >ABRIR</a></td>";         
                    echo "</tr>";}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>


  


<?php require 'admin-footer.php'; ?>

