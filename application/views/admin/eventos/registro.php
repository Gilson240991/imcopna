<script type='text/javascript' src="<?php echo base_url('tinymce/js/tinymce/tinymce.min.js'); ?>"></script>
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#"><b>EVENTOS</b></a>
			</li>
			<li class="breadcrumb-item">
				<a href="#"><b>Mantenimiento de eventos</b></a>
			</li>
			<li class="breadcrumb-item active"><b>Crear Evento</b></li>
		</ol>
		<div class="well">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#contenido" role="tab">Contenido</a>
				</li>
				<?php if(is_object($model)): ?>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#opciones" role="tab">Opciones</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#comentarios" role="tab">Comentarios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#categorias" role="tab">Categorias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#video" role="tab">Video Destacado</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#adjuntos" role="tab">Adjuntos</a>
				</li>
			<?php endif; ?>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="contenido" role="tabpanel">
					<form action="">
						<?php if(is_object($model)):?>
						<div class="form-group">
							<div class="well-alert well-sm text-center">
							<?php if($model->Vistos>1):?>
								Este evento ha sido visto por <?php echo $model->Vistos ?> personas		
							<?php endif;
							if($model->Vistos==0):?>
								Esta publicación no ha generado lecturas
							<?php endif;?>
							</div>
						</div>
						<?php endif; ?>
						<div class="form-group">
							<label for="">Título</label>
							<input type="text" class="form-control" id="titulo" placeholder="Ingrese un título">
						</div>
						<div class="form-group">
							<label for="">Descripción</label>
							<textarea  class="form-control" id="descripcion" placeholder="Ingrese una descripción"></textarea>
						</div>
						<div class="form-group">
							<label for="">Contenido</label>
							<textarea  id="cont" class="form-control"></textarea>
						</div>
						<div class="form-group" >
							<button class="btn btn-primary" type="button" onclick="grabarevento()">Grabar</button>
						</div>
					</form>
				</div>
				<div class="tab-pane" id="opciones" role="tabpanel">
					<div class="row">
						<div class="col-sm-12">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam maxime dolorum earum excepturi expedita est, delectus id nostrum! Aperiam voluptate tempore possimus, modi aspernatur tenetur expedita atque officiis quae non.
						</div>w
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input type="text" class="form-control">
						</div>
					</div></div>
					<div class="tab-pane" id="comentarios" role="tabpanel">...</div>
					<div class="tab-pane" id="categorias" role="tabpanel">...</div>
					<div class="tab-pane" id="video" role="tabpanel">...</div>
					<div class="tab-pane" id="adjuntos" role="tabpanel">...</div>
				</div>
			</div>
			
		</div>
	</div>
	<style>
		#cuadro-imagen{
			width: 100%;
			background-color: #E2E2E2;
			box-shadow: 1px 1px 1px 1px #ccc;
		}
		.well{
			padding: 15px;
		}
	</style>
	<script>tinymce.init({ selector:'#cont', theme: 'modern' });</script>