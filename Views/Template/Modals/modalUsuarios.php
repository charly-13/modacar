<!-- Modal -->
<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- start form for validation -->
        <form class="form-label-left input_mask" id="formUsuario" name="formUsuario">
         <input type="hidden" id="idUsuario" name="idUsuario" value="">




         <div class="col-md-12 col-sm-12  form-group has-feedback">
          <input type="text" class="form-control has-feedback-left" id="txtIdentificacion" name="txtIdentificacion" placeholder="Identificación (RFC)">
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <input type="text" class="form-control has-feedback-left" id="txtNombre" name="txtNombre" placeholder="Nombres">
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Apellidos">
          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <input type="email" class="form-control has-feedback-left" id="txtEmail" name="txtEmail" placeholder="Email">
          <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <input type="tel" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Teléfono">
          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
        </div>

        <div class="form-group row">
          <label class="control-label col-md-3 col-sm-3 " for="listRolid">TIPO DE USUARIO</label>
          <div class="col-md-9 col-sm-9 ">
            <select class="form-control" data-live-search="true" id="listRolid" name="listRolid"  autocomplete="off">
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="control-label col-md-3 col-sm-3 " >STATUS</label>
          <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="listStatus" name="listStatus" >
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>
        </div>



        <div class="form-group row">
          <label class="col-form-label col-md-3 col-sm-3 ">CONTRASEÑA</label>
          <div class="col-md-9 col-sm-9 ">
            <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="********">
          </div>
        </div>


        <div class="ln_solid"></div>
        <div class="form-group row">
          <div class="col-md-9 col-sm-9  offset-md-3">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-primary" type="reset">Reiniciar</button>
            <button type="submit" class="btn btn-success" id="btnActionForm"><span id="btnText">Guardar</span></button>
          </div>
        </div>

      </form>
       <!--      <form id="formUsuario" name="formUsuario" class="form-horizontal">
              <input type="hidden" id="idUsuario" name="idUsuario" value="">
              <p class="text-primary">Todos los campos son obligatorios.</p>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="txtIdentificacion">Identificación</label>
                  <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" required="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="txtNombre">Nombres</label>
                  <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="txtApellido">Apellidos</label>
                  <input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido" required="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="txtTelefono">Teléfono</label>
                  <input type="text" class="form-control valid validNumber" id="txtTelefono" name="txtTelefono" required="" onkeypress="return controlTag(event);">
                </div>
                <div class="form-group col-md-6">
                  <label for="txtEmail">Email</label>
                  <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" required="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="listRolid">Tipo usuario</label>
                    <select class="form-control" data-live-search="true" id="listRolid" name="listRolid" required >
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="listStatus">Status</label>
                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>
             </div>
             <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="txtPassword">Password</label>
                  <input type="password" class="form-control" id="txtPassword" name="txtPassword" >
                </div>
             </div>
              <div class="tile-footer">
                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
              </div>
            </form> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalViewUser" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" >
        <div class="modal-content">
          <div class="modal-header header-primary">
            <h5 class="modal-title" id="titleModal">Datos del usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Identificación:</td>
                  <td id="celIdentificacion">654654654</td>
                </tr>
                <tr>
                  <td>Nombres:</td>
                  <td id="celNombre">Jacob</td>
                </tr>
                <tr>
                  <td>Apellidos:</td>
                  <td id="celApellido">Jacob</td>
                </tr>
                <tr>
                  <td>Teléfono:</td>
                  <td id="celTelefono">Larry</td>
                </tr>
                <tr>
                  <td>Email (Usuario):</td>
                  <td id="celEmail">Larry</td>
                </tr>
                <tr>
                  <td>Tipo Usuario:</td>
                  <td id="celTipoUsuario">Larry</td>
                </tr>
                <tr>
                  <td>Estado:</td>
                  <td id="celEstado">Larry</td>
                </tr>
                <tr>
                  <td>Fecha registro:</td>
                  <td id="celFechaRegistro">Larry</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

