<!DOCTYPE html>
<html>

<head>
	<title>WTC</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css?cachebuster=<?php echo date('Ymdhis'); ?>">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/styles.css?cachebuster=<?php echo date('Ymdhis'); ?>">
	<link rel="icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/gif">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-3.6.0.min.js"></script>
	<style type="text/css">
		.internationalization {
			display: inline-block;
			position: absolute;
			top: 81px;
			right: 0;
			margin-right: 20px;
		}

		.list-dropdown {
			max-width: 3.5rem;
			min-width: 3.5rem;
			border-radius: 27px;

		}

		.border-list-dropdown {
			margin-top: 1rem;
			margin-bottom: 1rem;
		}

		.dropdown-item {
			padding: 0 !important;
			text-align: center !important;
		}

		.list-language {
			color: var(--bs-primary);
		}

		.login-btn {
			display: inline-block !important;
			top: 0 !important;
			right: 0 !important;
			position: absolute !important;
			margin-right: 1rem;
			/* margin-top: 1.1rem; */
		}
	</style>
</head>

<body>
	<ul class="nav justify-content-center menu">
		<a class="brand-logo" href="<?php echo base_url(); ?>home" style="">
			<img src="assets/img/logo.png" alt="" width="168" height="60">
		</a>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>about">About Us</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>ministries">Ministries</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>communities">Communities</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>connectwithus">Connect with Us</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>articles?id=1">Global Church</a>
		</li>
		<a class="nav-link login-btn" href="<?php echo base_url(); ?>home" style="">
			<i class="fas fa-sign-in-alt color-primary"></i>&nbsp;Login
		</a>
	</ul>
	<div class="dropdown internationalization">
		<button class="btn dropdown-toggle color-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fas fa-globe"></i>
		</button>
		<ul class="dropdown-menu list-dropdown" aria-labelledby="dropdownMenuButton1">
			<li class="border-list-dropdown"><a class="dropdown-item" href="#"><span class="list-language">EN</span></a></li>
			<li class="border-list-dropdown"><a class="dropdown-item" href="#"><span class="list-language">ID</span></a></li>
		</ul>
	</div>
	<br />
	<br />