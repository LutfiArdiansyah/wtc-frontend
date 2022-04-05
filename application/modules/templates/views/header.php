<!DOCTYPE html>
<html>

<head>
	<title>World Transformation Church</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css?cachebuster=<?php echo date('Ymdhis'); ?>">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/styles.css?cachebuster=<?php echo date('Ymdhis'); ?>">
	<link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/gif">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-3.6.0.min.js"></script>
	<style type="text/css">
		/* .internationalization {
			display: inline-block;
			position: absolute;
			top: 81px;
			right: 0;
			margin-right: 20px;
		} */

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
			margin-right: 0;
			margin-top: 0.7rem;
			font-weight: bold;
		}

		.container-breadcrumb {
			padding-bottom: 0.3rem;
		}

		@media (min-width: 992px) {
			.container-breadcrumb {
				width: 70.25rem;
				padding-bottom: 0.3rem;
			}

			.login-btn {
				margin-right: 7.5rem;
			}
		}

		.breadcrumb-text {
			font-size: 0.938rem !important;
			font-style: bold;
			color: var(--bs-primary) !important;
			font-family: var(--bs-body-font-family) !important;
		}

		.breadcrumb-item+.breadcrumb-item::before {
			color: black;
		}

		.ff-poppin {
			font-family: "Poppins", sans-serif !important;
		}

		.ff-fira {
			font-family: 'Fira Sans', sans-serif;
		}

		.btn-hover:hover {
			transform: scale(1.1, 1.1);
			transition: 0.3s;
		}

		.brand-logo {
			display: inline-block !important;
			top: 0 !important;
			left: 0 !important;
			position: absolute !important;
			/* margin-top: 0.5rem; */
			margin-left: 0;
		}

		@media (min-width: 992px) {
			.brand-logo {
				margin-left: 7.5rem;
			}
		}
	</style>
</head>

<?php
$curl = curl_init();

curl_setopt_array($curl, array(
	//CURLOPT_PORT => "1337",
	CURLOPT_URL => STRAPI_URL . '/wtc-menus?_locale=' . $this->session->userdata('locale'),
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"cache-control: no-cache",
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	header('Location: ' . base_url() . 'internalservererror');
	return;
} else {
	$menus = json_decode($response);
}
?>

<body>
	<ul class="nav justify-content-center menu">
		<a class="brand-logo" href="<?php echo base_url(); ?>home" style="">
			<img src="assets/img/logo.png" alt="" width="168" height="60">
		</a>
		<?php foreach ($menus as $key => $value) { ?>
			<li class="nav-item">
				<a class="nav-link ff-poppin" href="<?php echo $value->link; ?>"><?php echo $value->name; ?></a>
			</li>
		<?php } ?>

		<div class="dropdown login-btn">
			<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="far fa-globe color-primary"></i>&nbsp;<span style="font-weight: bold;"><?php echo strtoupper($this->session->userdata('locale')) ?></span>
			</button>
			<ul class="dropdown-menu list-dropdown" aria-labelledby="dropdownMenuButton1">
				<li class="border-list-dropdown"><a class="dropdown-item" href="<?php echo base_url() . '?locale=en' ?>"><span class="list-language">EN</span></a></li>
				<li class="border-list-dropdown"><a class="dropdown-item" href="<?php echo base_url() . '?locale=id' ?>"><span class="list-language">ID</span></a></li>
			</ul>
		</div>

	</ul>
	<?php
	//echo $_SERVER['REQUEST_URI'];
	if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== '/connectwithus') {
		echo '<br />';
		echo '<br />';
	}
	?>
	<?php if (isset($breadcrumb) && count($breadcrumb) > 0) { /* var_dump($home);die; */?>
	<div class="container">
		<div class="container-breadcrumb mx-auto">

			
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<i class="fas fa-caret-left"></i>&nbsp;&nbsp;
							<?php if(isset($home)) { ?>
								<a href="<?php echo base_url() ?>" class="breadcrumb-text">Home 
								</a> / 
							<?php } ?>
							
							<?php if(isset($breadcrumb[0]->wtc_breadcrumb_group)) { ?>
								<a href="<?php echo base_url() . $breadcrumb[0]->wtc_breadcrumb_group->link; ?>" class="breadcrumb-text">
									<?php echo $breadcrumb[0]->wtc_breadcrumb_group->name; ?>
								</a>/ 
							<?php } ?>

							<a href="<?php echo base_url() . $breadcrumb[0]->link; ?>" class="breadcrumb-text">
									<?php echo $breadcrumb[0]->name; ?>
								</a>

							<?php if(isset($article->title)) { ?>/ 
								<a href="<?php echo base_url() . 'articles?id=' . $article->id; ?>" class="breadcrumb-text">
									<?php echo $article->title; ?>
								</a>
							<?php } ?>

							<?php if(isset($data->wtc_breadcrumb_list)) { ?> /
								<a href="<?php echo base_url() . 'communitydetail?id=' . $data->id; ?>" class="breadcrumb-text">
									<?php echo $data->title; ?>
								</a>
							<?php } ?>
						</li>

					</ol>
				</nav>
		</div>
	</div>
	
	<?php } ?>