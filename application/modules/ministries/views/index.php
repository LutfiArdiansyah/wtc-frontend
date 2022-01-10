<style type="text/css">
	.carousel-inner, .br-25 { 
		border-radius: 25px;
	}
	p .description {
		white-space: pre-line;
	}
</style>
<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<?php foreach ($data->banner as $key => $value) { ?>
				<?php if ($key == 0) { ?>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" class="active" aria-current="true" aria-label="<?php echo $value->alternativeText; ?>"></button>
				<?php } else { ?>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" aria-label="<?php echo $value->alternativeText; ?>"></button>
				<?php } ?>
			<?php } ?>
		</div>
		<div class="carousel-inner">
			<?php foreach ($data->banner as $key => $value) { ?>
				<?php if ($key == 0) { ?>
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo STRAPI_URL.$value->url; ?>" alt="<?php echo STRAPI_URL.$value->alternativeText; ?>">
						<div class="carousel-caption d-none d-md-block">
							<h5><?php echo $data->title; ?></h5>
						</div>
					</div>
				<?php } else { ?>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo STRAPI_URL.$value->url; ?>" alt="<?php echo STRAPI_URL.$value->alternativeText; ?>">
						<div class="carousel-caption d-none d-md-block">
							<h5><?php echo $data->title; ?></h5>
						</div>
					</div>
				<?php } ?>


			<?php } ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<br/>
	<br/>
	<div class="text-center d-flex">
		<p class="fw-bold w-75 mx-auto description"><?php echo $data->description; ?></p>
	</div>
	<br/>
	<br/>
	<div class="row justify-content-center" >
		<?php foreach ($data_category as $key => $value) { ?>
			<div class="col-lg-6 col-sm-12 text-center mb-4">
				<img src="<?php echo STRAPI_URL.$value->banner->url; ?>" alt="<?php echo $value->banner->alternativeText; ?>" class="w-75 mx-auto br-25">
				<br/>
				<br/>
				<h2 class="fw-bold"><?php echo $value->name; ?></h2>
				<br/>
				<p class="w-50 mx-auto description"><?php echo $value->description; ?></p>
				<br/>
				<a href="<?php echo base_url().$value->button_link; ?>"><button type="button" class="btn btn-primary mx-auto w-25"><?php echo $value->button_name; ?></button></a>
			</div>
		<?php } ?>
	</div>
	<br/>
	<br/>
	
</div>