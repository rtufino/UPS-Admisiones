  <!--Modal --->
  <form action="<?php echo site_url("encuesta/login_validation"); ?>" method="POST">
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content" style="border: none;">
          <div class="modal-header teal darken-2 text-center" style="background-color: #457239;">
            <h5 class="modal-title w-15 font-weight-bold text-white">INICIAR SESIÓN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text" style="color:white">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="input-group mb-3">
            <label for="validationTooltipUsername">Usuario</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                    </div>
                    <input type="text" class="form-control" name="inUsuario" id="inUsuario" placeholder="Usuario Personal" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    <?php echo $this->session->flashdata("error");?>
                    </div>
                </div>
            </div>

            <div class="md-form mb-4">
            <div class="input-group mb-3">
            <label for="validationTooltipUsername">Contraseña</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                    </div>
                    <input type="password" class="form-control" name="inPassword" id="inPassword" placeholder="Contraseña" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                    </div>
                </div>
            </div>
            </div>
            <div class="d-flex justify-content-center">
              <input type="submit" class="btn btn-danger btn-block text-white" style="background-color: #455da9; border-color: #455da9;" value="Ingresar">
              <span></span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>
  <!--END Modal-->