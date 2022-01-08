<style type="text/css">
	.carousel-inner, .br-25 { 
		border-radius: 25px;
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
					<h2><?php echo $article_name; ?></h2>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="https://ychef.files.bbci.co.uk/1600x900/p0b66smr.webp" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
					<h2><?php echo $article_name; ?></h2>
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
	<div class="row justify-content-center">
		<div class="col-4">
			<h2>About <?php echo $article_name; ?></h2>
		</div>
		<div class="col-8">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p>
					Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta.
				</p>
				<p>
					Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
				</p>
			</div>
		</div>
	</div>
	<br/>
	<br/>
	<div class="row justify-content-center">
		<div class="col-4">
			<h2>Leadership</h2>
		</div>
		<div class="col-8">
			<div class="row justify-content-center">
				<div class="col-12">
					<?php for ($x = 0; $x <= 1; $x++) {?>
						<div class="row justify-content-center" style="background-color:white; border-radius: 25px; padding: 15px;">
							<div class="col-3">
								<img src="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2019/12/553b64f7e50ac61fc191d4686d0786c1.jpg" alt="..." style="border-radius:50%;width: 200px; height: 200px;">
							</div>
							<div class="col-9">
								<p class="fw-bold">Ps Yonathan Wiryohadi & Swissa Flora</p>
								<p>
									Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta.
								</p>
								<p class="fw-bold">
									<span><i class="fab fa-instagram"></i>&nbsp;@wiryohadi</span>
									&nbsp;
									<span><i class="fab fa-instagram"></i>&nbsp;@florawiryohadi</span>
								</p>
							</div>
						</div>
						<br/>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<br/>
	<div class="row justify-content-center">
		<div class="col-4">
			<h2>Services</h2>
		</div>
		<div class="col-8">
			<?php for ($x = 0; $x <= 1; $x++) {?>
				<div class="row  justify-content-md-center">
					<div class="col-12">
						<div class="card br-15">
							<div class="card-body">
								<div class="row ">
									<div class="col-6">
										<h5 class="color-primary">WTC</h5>
										<h5 class="fw-bold color-primary">Ballroom</h5>
									</div>
									<div class="col-6">
										<div class="row">
											<div class="col-8 text-end">
												<button type="button" class="btn btn-primary">Get Involved</button>
											</div>
											<div class="col-4">
												<h5 class="color-primary text-end"><a class="color-primary" href="tel:+496170961709">Contact</a></h5>
											</div>
										</div>
									</div>
								</div>
								<br/>
								<div class="row ">
									<div class="col-4">
										<p class="fw-bold">Address</p>
										<p>Mall WTC Serpong, Hall Ballroom Jl. Raya Serpong</p>
									</div>
									<div class="col-2">
										<p class="fw-bold">Times</p>
										<p>Sunday</p>
										<p>09:00 AM</p>
									</div>
									<div class="col-3">
										<p class="fw-bold">Campus Pastor</p>
										<p>Ps. Djuhardi Hardja</p>
									</div>
									<div class="col-3 text-end">
										<img src="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2019/12/553b64f7e50ac61fc191d4686d0786c1.jpg" style="border-radius:50%;width: 100px; height: 100px;">
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
	<br/>
	<br/>
	<div class="card br-15">
		<div class="card-body">
			<h2 class="text-center">Gallery</h2>
			<hr/>
			<div class="row">
				<?php for ($x = 0; $x <= 7; $x++) {?>
					<div class="col-3 text-center" style="padding-bottom: 25px;">
						<img src="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2019/12/553b64f7e50ac61fc191d4686d0786c1.jpg" style="border-radius:15px;width: 240px; height: 240px;">
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>