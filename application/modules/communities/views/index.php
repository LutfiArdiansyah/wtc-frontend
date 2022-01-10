<style type="text/css">
	.carousel-inner, .br-25 { 
		border-radius: 25px;
	}
	.btn-join {
		padding-top: 15px;
		padding-bottom: 15px;
		border-radius: 10px;
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
	<div class="row justify-content-center w-75 mx-auto" >
		<div class="col-lg-8 col-sm-12  mt-5" style="background-color:white; border-radius: 10px; padding:10px">
			<p class="mx-auto description" style="color: var(--bs-primary);"><?php echo $data->description; ?></p>
		</div>
		<div class="col-lg-4  col-sm-12 text-center mt-5">
			<a href="<?php echo base_url().$data->button_link; ?>"><button type="button" class="btn btn-primary mx-auto w-50 fw-bold btn-join"><?php echo $data->button_name; ?></button></a>
		</div>
	</div>
</div>