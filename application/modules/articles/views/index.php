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
						<img class="d-block w-100" src="<?php echo STRAPI_URL.$value->url; ?>" alt="<?php echo STRAPI_URL.$value->alternativeText; ?>">
						<div class="carousel-caption d-none d-md-block">
							<h5><?php echo $article->title; ?></h5>
						</div>
					</div>
				<?php } else { ?>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo STRAPI_URL.$value->url; ?>" alt="<?php echo STRAPI_URL.$value->alternativeText; ?>">
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
	<br/>
	<br/>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-sm-12">
			<h2>About <?php echo $article->title; ?></h2>
		</div>
		<div class="col-lg-8 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p style="white-space: pre-line;">
					<?php echo $article->content; ?>
				</p>
			</div>
		</div>
	</div>
	<?php if (count($article->wtc_leaderships) > 0) {?>

		<br/>
		<br/>
		<div class="row justify-content-center">
			<div class="col-lg-4  col-sm-12">
				<h2>Leadership</h2>
			</div>
			<div class="col-lg-8 col-sm-12">
				<div class="row justify-content-center">
					<?php foreach ($article->wtc_leaderships as $key => $value) {?>
						<div class="row justify-content-center" style="background-color:white; border-radius: 25px; padding: 15px;">
							<div class="col-3">
								<img src="<?php echo isset($value->avatar) ? STRAPI_URL.$value->avatar->url : base_url()."assets/img/avatar.svg";?>" alt="..." style="border-radius:50%;width: 100%; height: same-as-width;">
							</div>
							<div class="col-9">
								<p class="fw-bold"><?php echo $value->name; ?></p>
								<p  class="description">
									<?php echo $value->description; ?>
								</p>
								<p class="fw-bold">
									<span><i class="fab fa-instagram"></i>&nbsp;
										<a href="<?php echo $value->instagram_link_1; ?>" target="_blank"><?php echo $value->instagram_1; ?></a>

									</span>
									<?php if (isset($value->instagram_2)) {?>

										&nbsp;
										<span><i class="fab fa-instagram"></i>&nbsp;
											<a href="<?php echo $value->instagram_link_2; ?>" target="_blank"><?php echo $value->instagram_2; ?></a>
										</span>
									<?php } ?>
								</p>
							</div>
						</div>
						<br/>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if (count($article->wtc_worship_places) > 0) {?>
		<br/>
		<br/>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-sm-12">
				<h2>Services</h2>
			</div>
			<div class="col-lg-8 col-sm-12">
				<?php foreach ($article->wtc_worship_places as $key => $value) { ?>
					<div class="row  justify-content-md-center">
						<div class="col-12">
							<div class="card br-15">
								<div class="card-body">
									<div class="row ">
										<div class="col-6">
											<h5 class="color-primary">WTC</h5>
											<h5 class="fw-bold color-primary"><?php echo $value->name; ?></h5>
										</div>
										<div class="col-6">
											<div class="row">
												<div class="col-8 text-end">
													<button type="button" class="btn btn-primary">Get Involved</button>
												</div>
												<div class="col-4">
													<h5 class="color-primary text-end"><a class="color-primary" href="tel:<?php echo $value->phone_1; ?>">Contact</a></h5>
												</div>
											</div>
										</div>
									</div>
									<br/>
									<div class="row ">
										<div class="col-4">
											<p class="fw-bold">Address</p>
											<p style="white-space:pre-line;"><?php echo $value->address; ?></p>
										</div>
										<div class="col-2">
											<p class="fw-bold">Times</p>
											<p><?php echo $value->day; ?></p>
											<p><?php echo $value->time; ?></p>
										</div>
										<div class="col-3">
											<p class="fw-bold">Campus Pastor</p>
											<p><?php echo $value->pastor_name; ?></p>
										</div>
										<div class="col-3 text-end">
											<img src="<?php echo isset($value->pastor_avatar) ? STRAPI_URL.$value->pastor_avatar->url : base_url()."assets/img/avatar.svg";?>" style="border-radius:50%;width: 100px; height: 100px;">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br/>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if (count($article->gallery) > 0) {?>

		<br/>
		<br/>
		<div class="card br-15">
			<div class="card-body">
				<h2 class="text-center">Gallery</h2>
				<hr/>
				<div class="row">
					<?php foreach ($article->gallery as $key => $value) { ?>
						<div class="col-lg-3 col-sm-12 text-center" style="padding-bottom: 25px;">
							<img src="<?php echo STRAPI_URL.$value->url; ?>" style="border-radius:15px;width: 240px; height: 240px;">
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>

</div>