<style type="text/css">
	.size-img-carousel {
		width: 100vw;
	}
	.carousel-inner { 
		border-radius: 25px;
	}
	.carousel-welcome {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		z-index: 20;
		color: white;
		text-shadow: 0 1px 2px rgba(0,0,0,.6);
	}
	/*.hchy {
		max-width: 350px;
	}*/
	.hchy button {
		margin-top: 25px;
		border-radius: 10px;
		padding: 1.3em 0 1.3em;
		font-weight: 900;
	}
	.instagram{ 
		background: #f09433; 
		background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
		background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
		background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
	}
</style>
<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<?php if (!strpos($data->banner->mime, "image")) { ?>
					<img class="w-100" src="<?php echo STRAPI_URL.$data->banner->url;?>">
				<?php } else {?>
					<video class="w-100" height="555" controls>
						<source src="<?php echo STRAPI_URL.$data->banner->url;?>" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					<?php } ?>
					<div class="carousel-caption d-none d-md-block">
						<div class="row justify-content-center">
							<div class="col-6 hchy">
								<a href="http://ruangan.info/onsite" target="_blank">
									<button type="button" class="btn btn-primary w-100" style="background-color: #fff; color:#000;">Register Onsite Service</button>
								</a>
							</div>
							<div class="col-6 hchy">
								<a href="<?php echo $data->youtube_link; ?>">
									<button type="button" class="btn btn-primary w-100" style="background-color: #fff; color:#000;">Watch Online Service</button>
								</a>
							</div>
						</div>
					</div>
					<div class="carousel-welcome text-center">
						<h1>Welcome to</h1>
						<h1 class="fw-bold"><?php echo $data->title; ?></h1>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<br/>
		<br/>
		<div class="text-center">
			<h1>How can we help you?</h1>
		</div>
		<br/>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-sm-12 hchy">
				<a href="<?php echo base_url().$data->button_link_1; ?>">
					<button type="button" class="btn btn-primary w-100"><?php echo $data->button_name_1; ?></button>
				</a>
			</div>
			<div class="col-lg-4 col-sm-12 hchy">
				<a href="<?php echo base_url().$data->button_link_2; ?>">
					<button type="button" class="btn btn-primary w-100"><?php echo $data->button_name_2; ?></button>
				</a>
			</div>
		</div>
		<br/>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-sm-12 hchy">
				<a href="<?php echo base_url().$data->button_link_3; ?>">
					<button type="button" class="btn btn-primary w-100"><?php echo $data->button_name_3; ?></button>
				</a>
			</div>
			<div class="col-lg-4 col-sm-12 hchy">
				<a href="<?php echo base_url().$data->button_link_4; ?>">
					<button type="button" class="btn btn-primary w-100"><?php echo $data->button_name_4; ?></button>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-sm-12 hchy text-center mt-4">
				<h2>Connect with us</h2>
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<a href="<?php echo $data->instagram_link; ?>" target="_blank">
							<button type="button" class="btn btn-primary w-100 instagram"><i class="fab fa-instagram"></i>&nbsp;<?php echo $data->instagram_name; ?></button>
						</a>
					</div>
					<div class="col-lg-6 col-sm-12">
						<a href="<?php echo $data->youtube_link; ?>" target="_blank">
							<button type="button" class="btn btn-primary w-100" style="background-color:#F00;"><i class="fab fa-youtube"></i>&nbsp;<?php echo $data->youtube_name; ?></button>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 hchy text-center mt-4">
				<h2>Locations</h2>
				<a href="<?php echo base_url()."connectwithus" ?>">
					<button type="button" class="btn btn-primary w-100" style="background-color:#FFF; color: #000"><i class="fal fa-map-marker-alt"></i>&nbsp;Find your area</button>
				</a>
			</div>
		</div>
		<br/>
		<!-- <div class="row justify-content-center">
			<div class="col-6 hchy">
				<div class="row">
					<div class="col-6">
						<button type="button" class="btn btn-primary w-100 instagram"><i class="fab fa-instagram"></i>&nbsp;Instagram</button>
					</div>
					<div class="col-6">
						<button type="button" class="btn btn-primary w-100" style="background-color:#F00;"><i class="fab fa-youtube"></i>&nbsp;Youtube</button>
					</div>
				</div>
			</div>
			<div class="col-6 hchy">
				<button type="button" class="btn btn-primary w-100" style="background-color:#FFF; color: #000"><i class="fal fa-map-marker-alt"></i>&nbsp;Find your area</button>
			</div>
		</div> -->
	</div>