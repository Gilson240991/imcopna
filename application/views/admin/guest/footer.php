<footer class="sticky-footer">
	<div class="container">
		<div class="text-center">
			<small>Copyright © Todos los derechos reservados</small>
		</div>
	</div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Alerta esta a punto de salir del sistema</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">¿Esta seguro que quiere terminar la sesion?.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="../Login/logout.php">Terminar session</a>
			</div>
		</div>
	</div>
</div>
<!-- Bootstrap core JavaScript-->
<script type='text/javascript' src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
<script type='text/javascript' src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script type='text/javascript' src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
<script type='text/javascript' src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
<script type='text/javascript' src="<?php echo base_url('js/usuario.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('js/eventos.js'); ?>"></script>


<!-- Custom scripts for this page-->
<!-- Toggle between fixed and static navbar-->
<script>
$('#toggleNavPosition').click(function() {
$('body').toggleClass('fixed-nav');
$('nav').toggleClass('fixed-top static-top');
});
</script>
<!-- Toggle between dark and light navbar-->
<script>
$('#toggleNavColor').click(function() {
$('nav').toggleClass('navbar-dark navbar-light');
$('nav').toggleClass('bg-dark bg-light');
$('body').toggleClass('bg-dark bg-light');
});
</script>
