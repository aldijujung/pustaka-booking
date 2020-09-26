<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Prog II | Merancang Template sederhana dengan codeigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1>RentalBuku.net</h1>
				<h3>Membuat Template Sederhana dengan CodeIgniter</h3>
			</hgroup>
			<nav>
				<ul>
					<button class="btn btn-success"><li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li></button>
					<button class="btn btn-primary"><li><a href="<?php echo base_url().'index.php/web/about' ?>">About</a></li></button>
					<button class="btn btn-info"><li><a href="<?php echo base_url().'index.php/web/saran' ?>">Saran</a></li></button>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>