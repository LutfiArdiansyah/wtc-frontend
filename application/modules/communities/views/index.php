<style type="text/css">
	.carousel-inner, .br-25 { 
		border-radius: 25px;
	}
	.btn-join {
		padding-top: 15px;
		padding-bottom: 15px;
		border-radius: 10px;
	}
</style>
<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="https://ychef.files.bbci.co.uk/1600x900/p0b66smr.webp" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>Communities</h5>
					<p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="https://ychef.files.bbci.co.uk/1600x900/p0b66smr.webp" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>Communities</h5>
					<p>Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
				</div>
			</div>
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
	<div class="row justify-content-center w-75 mx-auto" >
		<div class="col-8" style="background-color:white; border-radius: 10px; padding:10px">
			<p class="mx-auto" style="color: var(--bs-primary);">To reach people with the gospel, to disciple them by inculcating the Kingdom of Heaven to become.</p>
		</div>
		<div class="col-4 text-center ">
			<a href="<?php echo base_url(); ?>listcommunity"><button type="button" class="btn btn-primary mx-auto w-50 fw-bold btn-join">Join Now!</button></a>
		</div>
	</div>
</div>