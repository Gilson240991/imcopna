<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#"><b>EVENTOS</b></a>
			</li>
			<li class="breadcrumb-item active"><b>Mantenimiento de eventos</b></li>
		</ol>
		<form>
			<div class="row">
				<div class="col-sm-12">
					<label for="">Texto a buscar</label>
				</div>
				
				<div class="col-sm-12">
					<input type="text" name="txtBuscarEventos" placeholder="Realizar busqueda por Nombre, Apellido, D.N.I." class="form-control">
				</div>
				
			</div>
		</form>
		<br>
		<div class="row">
			<div class="col-sm-2">
				<a href='#' name="btnAgregarEventos" class="btn btn-success btn-block" data-toggle='modal' data-target='#modalInsertar'>Agregar</a>
			</div>
		</div>
		<br>
		  <div class="row">
    <div class="col-sm-12">
      <table class="table table-hover table-bordered table-sm">

          <thead class="thead-dark">
            <tr class="info" style="font-weight:bold">
            <th style="width: 2% ">N°</th>
            <th style="width: 15% ">Título</th>
            <th class="text-center" style="width: 0.5%">Estado</th>
            <th class="text-center" style="width: 1%">Destacado</th>
            <th class="text-center" style="width: 6%">Categoría</th>
            <th class='text-center' style="width: 5%">Creado por</th>
            <th class="text-center" style="width:2%">Fecha</th>
             <th class="text-center" style="width:2%">Veces visto</th>
            <th class="text-center" style="width:1%;">Editar</th>
            <th class="text-center" style="width:1%;">Eliminar</th>
              </tr>
          </thead>

            <tbody id="tbeventos">

            </tbody>


      </table>
      <div class="paginacion">

      </div>

    </div>

  </div>
	</div>
</div>