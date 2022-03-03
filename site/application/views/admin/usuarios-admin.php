<?php

use LDAP\Result;

 require 'admin-header.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Lista de Administradores </h1>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card overflow-auto">
            <div class="card-body img-fluid">
              <h5 class="card-title">Usuarios Registrados</h5>
              
              <table class="table datatable table-borderless table-responsive" style="font-size: 14px;">
                <thead>
                  <tr>
                    <th style="text-align: center;" scope="col">Usuario</th>
                    <th style="text-align: center;" scope="col">Password</th>
                    <th style="text-align: center;" scope="col">Estado</th>
                    
                  </tr>
                </thead>
                <tbody >
              <?php foreach($usuarios  as $row){
                    echo "<tr>";
                    echo "<td>$row->usuario</td>";
                    echo "<td>$row->psw</td>";
                  if($row->estado==1){echo "<td style='text-align: center;'><span class='badge bg-success'>Activo</span></td>";}
                  elseif($row->estado==0){echo "<td style='text-align: center;'><span class='badge bg-danger'>Inactivo</span></td>";}
                    }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>


  


<?php require 'admin-footer.php'; ?>

