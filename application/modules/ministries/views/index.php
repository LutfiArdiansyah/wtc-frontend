<style type="text/css">
	.carousel-inner,
	.br-25 {
		border-radius: 2.344rem;
	}

	p .description {
		white-space: pre-line;
	}

	.content {
		max-width: 69.141rem !important;
	}

	p.title-description {
		white-space: pre-line;
		font-family: 'Fira Sans', sans-serif;
		font-weight: 500;
		font-style: normal;
		font-size: 1.875rem;
		line-height: 1.946rem;
		margin-top: 3.322rem;
		margin-bottom: 3.322rem;
	}

	div .description {
		margin-top: 3.322rem;
	}

	.br-custom {
		border-radius: 2.344rem;
	}

	p.title-cateogry {
		font-style: normal;
		font-weight: 600;
		font-size: 2.578rem;
		line-height: 2.875rem;

		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color:white;
	}

	.img-cat {
		position: relative;
		text-align: center;
	}

	.cat-desc {
		white-space: pre-line;
		margin-top: 2.344rem;
		margin-bottom: 2.344rem;
		font-family: 'Fira Sans', sans-serif;
		font-style: normal;
		font-weight: normal;
		font-size: 0.938rem;
		line-height: 1.25rem;
		max-width: 85%;
	}

	.learn-more {
		width: 11.688rem;
		height: 3.344rem;
		border-radius: 0.938rem;
		font-style: normal;
		font-weight: 600;
		font-size: 1.406rem;
		line-height: 2.875rem;
		background-color: var(--bs-primary);
		border: none;
		color: white;
	}

	.carousel-cat {
		min-height: 20.625rem;
	}

	.title-carousel {
		font-style: normal;
		font-weight: 600;
		font-size: 4.677rem;
		line-height: 2.875rem;
	}

	.img-carousel {
		height: 633px !important;
	}

	@media (min-width: 992px) {
		.img-carousel {
			width: 1125px !important;
			height: 633px !important;
		}
	}
</style>
<div class="container content">
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
						<img class="d-block w-100 img-carousel" src="<?php echo STRAPI_URL . $value->url; ?>" alt="<?php echo STRAPI_URL . $value->alternativeText; ?>">
						<div class="carousel-caption d-none d-md-block">
							<h5 class="title-carousel"><?php echo $data->title; ?></h5>
						</div>
					</div>
				<?php } else { ?>
					<div class="carousel-item">
						<img class="d-block w-100 img-carousel" src="<?php echo STRAPI_URL . $value->url; ?>" alt="<?php echo STRAPI_URL . $value->alternativeText; ?>">
						<div class="carousel-caption d-none d-md-block">
							<h5 class="title-carousel"><?php echo $data->title; ?></h5>
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
	<p class="text-center title-description fw-bold"><?php echo $data->description; ?></p>
	<div class="row justify-content-center">
		<?php foreach ($data_category as $key => $value) { ?>
			<div class="col-lg-6 col-sm-12 text-center mb-4">
				<div class="img-cat">
					<img src="<?php echo STRAPI_URL . $value->banner->url; ?>" alt="<?php echo $value->banner->alternativeText; ?>" class="w-100 mx-auto br-custom carousel-cat">
					<p class="title-cateogry"><?php echo $value->name; ?></p>
				</div>
				<p class="cat-desc text-center mx-auto"><?php echo $value->description; ?></p>
				<a href="<?php echo base_url() . $value->button_link; ?>">
					<button type="button" class="mx-auto learn-more">
						<?php echo $value->button_name; ?>
					</button>
				</a>
			</div>
		<?php } ?>
	</div>
	<br />
	<br />

</div>