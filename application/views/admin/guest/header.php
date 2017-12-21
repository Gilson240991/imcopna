<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
		
		<link href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url('css/sb-admin.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/estilos.css') ?>">
		
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<script>
			function base_url(url) { return '<?php echo base_url('admin/'); ?>' + url; }
			function base_img(url) { return '<?php echo base_url('file/'); ?>' + url; }
			function redirect(href) { window.location.href = '<?php echo base_url('index.php/admin/'); ?>' + href; }
		</script>
		<title></title>

	</head>
	<body class="fixed-nav sticky-footer bg-dark" id="page-top">
