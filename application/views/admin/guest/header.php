<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
		
		<link href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url('css/sb-admin.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/estilos.css') ?>">
		
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<!-- Bootstrap core JavaScript-->
<script type='text/javascript' src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
<script type='text/javascript' src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script type='text/javascript' src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>


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

		<script>
			function base_url(url) { return '<?php echo base_url('admin/'); ?>' + url; }
			function base_img(url) { return '<?php echo base_url('file/'); ?>' + url; }
			function redirect(href) { window.location.href = '<?php echo base_url('index.php/admin/'); ?>' + href; }
		</script>
		<title></title>

	</head>
	<body class="fixed-nav sticky-footer bg-dark" id="page-top">
