<style type="text/css">
	.carousel-inner,
	.br-25 {
		border-radius: 25px;
	}

	.description {
		white-space: pre-line;
		font-family: 'Fira Sans', sans-serif;
		width: 62.016rem;
		font-style: normal;
		font-weight: normal;
		font-size: 1.125rem;
		line-height: 1.375rem;
	}

	.container {
		width: 70.313rem !important;
	}

	.title-banner {
		color: white;
		font-weight: bold;
		font-size: 4.688rem !important;
		line-height: 2.875rem !important;
	}

	.card {
		border: none;
		margin-top: 2.156rem;
		border-radius: 0.938rem;
	}

	.title {
		font-style: normal;
		font-weight: 600;
		font-size: 2.578rem;
		line-height: 2.875rem;
	}
</style>
<div class="container mx-auto">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<?php foreach ($article->banner as $key => $value) { ?>
				<?php if ($key == 0) { ?>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" class="active" aria-current="true" aria-label="<?php echo $value->alternativeText; ?>"></button>
				<?php } else { ?>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" aria-label="<?php echo $value->alternativeText; ?>"></button>
				<?php } ?>
			<?php } ?>
		</div>
		<div class="carousel-inner">
			<?php foreach ($article->banner as $key => $value) { ?>
				<?php if ($key == 0) { ?>
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo STRAPI_URL . $value->url; ?>" alt="<?php echo STRAPI_URL . $value->alternativeText; ?>">
						<div class="carousel-caption d-none d-md-block">
							<h5 class="title-banner"><?php echo $article->title; ?></h5>
						</div>
					</div>
				<?php } else { ?>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo STRAPI_URL . $value->url; ?>" alt="<?php echo STRAPI_URL . $value->alternativeText; ?>">
						<div class="carousel-caption d-none d-md-block">
							<h5><?php echo $article->title; ?></h5>
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
	<div class="card mx-auto">
		<div class="card-body">
			<h1 class="title text-center fw-bold mx-auto">Tentang</h1>
			<p class="description mx-auto text-center">
				<?php echo $article->about; ?>
			</p>
		</div>
	</div>
	<div class="card mx-auto">
		<div class="card-body">
			<h1 class="title text-center fw-bold mx-auto">Kepemimpinan</h1>
			<p class="description mx-auto text-center">
				<?php echo $article->leadership; ?>
			</p>
		</div>
	</div>
</div>