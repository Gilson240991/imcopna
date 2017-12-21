

<div class="content-wrapper">
  <div class="container-fluid">
  <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#"><b>USUARIOS</b></a>
      </li>
      <li class="breadcrumb-item active"><b>Mantenimiento de usuarios</b></li>
    </ol>
  <form>
  <div class="row">
    <div class="col-sm-12">
      <label for="">Texto a buscar</label>
    </div>
    
    <div class="col-sm-12">
      <input type="text" name="txtBuscar" placeholder="Realizar busqueda por Nombre, Apellido, D.N.I." class="form-control">
    </div>
    

  </div>

</form>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <a href='#' name="btnAgregar" class="btn btn-success btn-block" data-toggle='modal' data-target='#modalInsertar'>Agregar</a>
    </div>

  </div>
<br>
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-hover table-bordered table-sm">

          <thead class="thead-dark">
            <tr class="info" style="font-weight:bold">
            <th style="width: 2% ">N°</th>
            <th style="width: 3% ">D.N.I</th>
            <th style="width: 10%">Nombre</th>
            <th style="width: 10%">Apellido Paterno</th>
            <th style="width: 10%">Apellido Materno</th>
            <th style="width: 15%">Correo</th>
            <th style="width:2%">Usuario</th>
            <th style="width:2%;">Editar</th>
            <th style="width:2%;">Eliminar</th>
              </tr>
          </thead>

            <tbody id="tbpersona">

            </tbody>


      </table>
      <div class="paginacion">

      </div>

    </div>

  </div>


<!-- modal para editar -->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditar">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
           <h4>Actualizar Informacion</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         
        </div>
        <div class="modal-body">
          <form  class="form-horizontal" id='form-persona-actualizar'>
            <input type="hidden" name="Id" id="id">
            <input type="hidden" name="IdUsuario" id="IdUsuario">
            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">D.N.I</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtdni" id='Dni' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Nombre</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtnombre" id='Nombre' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Apellido Paterno</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtpaterno" id='Paterno' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Apellido Materno</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtmaterno" id='Materno' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Correo Electronico</label>
                </div>
                <div class="col-sm-6">
                  <input type="mail" name="txtcorreo" id='Correo' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Número Celular</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtcelular" id='Celular' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Dirección</label>
                </div>
                <div class="col-sm-6">
                  <input type="mail" name="txtdireccion" id='Direccion' value="" class="form-control">
                </div>
              </div>

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"  id='closeupdate'>Close</button>
          <button type="button" class="btn btn-success" onclick="update();">Actualizar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.fin modal editar -->

  <!--modal para insertar personas-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalInsertar">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4>Agregar Persona</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form  class="form-horizontal" id='form-persona-actualizar'>
          
            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">D.N.I</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtdni" id='Dniinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Nombre</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtnombre" id='Nombreinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Apellido Paterno</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtpaterno" id='Paternoinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Apellido Materno</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtmaterno" id='Maternoinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Correo Electronico</label>
                </div>
                <div class="col-sm-6">
                  <input type="mail" name="txtcorreo" id='Correoinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Número Celular</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtcelular" id='Celularinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Dirección</label>
                </div>
                <div class="col-sm-6">
                  <input type="mail" name="txtdireccion" id='Direccioninsert' value="" class="form-control">
                </div>
              </div>

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id='closeregistrar'>Close</button>
          <button type="button" class="btn btn-success" onclick="insert();">Grabar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal insertar -->


  <!-- modal para ver usuarios -->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalUsuario">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
           <h4>Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         
        </div>
        <div class="modal-body">
          <input type="hidden" id="id_usuario" >
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="">Usuario :</label>
            </div>
            <div class="col-sm-8">
              <input type="text" id='usuario' class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-4">
              <label for="">Password :</label>
            </div>
            <div class="col-sm-8">
              <input type="password" id='password' class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-4">
              <label for="">Tipo de usuario :</label>
            </div>
            <div class="col-sm-8">
              <select name="tipo_usuario" id="tipo_usuario" class="form-control">
                <option value="0">Seleccionar</option>
                <option value="1">ADMINISTRADOR</option>
                <option value="2">COLABORADOR</option>

              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-4">
              <label for="">Estado :</label>
            </div>
            <div class="col-sm-8">
              <select name="estado" id="estado" class="form-control">
                <option value="0">Seleccionar</option>
                <option value="1">ACTIVO</option>
                <option value="2">INACTIVO</option>

              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal" id='closeusuario'>Close</button>
          <button type="button" class="btn btn-success" onclick="updateUsuario();">Actualizar</button>
        </div>
</div>
</div>