<style type="text/css">
	.carousel-inner {
		padding-top: 25px;
		border-radius: 25px;
	}
	p .description {
		white-space: pre-line;
	}
</style>
<div class="container text-center">
	<h1 class="fw-bold" style="color: var(--bs-primary);"><?php echo $data->name; ?></h1>
	<br/>
	<p class="w-75 fw-bold mx-auto description"><?php echo $data->description; ?></p>
	<br/>
	<div class="text-center w-50 mx-auto">
		<div class="row">
			<div class="col-12">
				<form class="d-flex">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
						<button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
					</div>
					&nbsp;
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-sort"></i>&nbsp;Sort By
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
							<li><a class="dropdown-item" href="#">Name</a></li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br/>
	<div class="row">
		<?php foreach ($articles as $key => $value) {?>
			<div class="col-6 text-center">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100 br-25" src="<?php echo STRAPI_URL.$value->banner[0]->url; ?>" alt="<?php $value->banner[0]->alternativeText; ?>">
							<div class="carousel-caption d-none d-md-block fw-bold">
								<a style="color:white;" href="<?php echo base_url(); ?>articles?id=<?php echo $value->id; ?>">
									<h5><?php echo $value->title; ?></h5>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		<?php } ?>
	</div>
</div>
<br/>
<br/>