<style type="text/css">
	i.black {
		color: #7C8DB0;
		height: 33px;
		width: 33px;
	}
	a {
		text-decoration: none;
		color: black !important;
		font-family: 'Fira Sans', sans-serif;
		font-size: 1.25rem;
	}
	p {
		color: black;
		font-size: 1.25rem;
	}
	h6 {
		font-size: 1.25rem;
		font-weight: bold;
	}
</style>
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
	<!-- Section: Social media -->
	<section class="d-flex justify-content-center justify-content-lg-between p-4">
		<!-- <div>
		<a href="" class="me-4 text-reset">
			<i class="fab fa-facebook-f"></i>
		</a>
		<a href="" class="me-4 text-reset">
			<i class="fab fa-twitter"></i>
		</a>
		<a href="" class="me-4 text-reset">
			<i class="fab fa-google"></i>
		</a>
		<a href="" class="me-4 text-reset">
			<i class="fab fa-instagram"></i>
		</a>
		<a href="" class="me-4 text-reset">
			<i class="fab fa-linkedin"></i>
		</a>
		<a href="" class="me-4 text-reset">
			<i class="fab fa-github"></i>
		</a>
	</div> -->
	</section>
	<!-- Section: Social media -->

	<!-- Section: Links  -->
	<section class="">
		<div class="container text-center text-md-start mt-5">
			<!-- Grid row -->
			<div class="row mt-3 mb-5">
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-lg-3 col-sm-12">
							<h6 class="fw-bold mb-4 color-primary">
								About Us
							</h6>
							<p>
								<a href="<?php echo base_url(); ?>about" class="text-reset">About WTC</a>
							</p>
							<p>
								<a href="<?php echo base_url(); ?>about" class="text-reset">Leadership</a>
							</p>
							<p>
								<a href="<?php echo base_url(); ?>about" class="text-reset">Values</a>
							</p>
							<p>
								<a href="<?php echo base_url(); ?>about" class="text-reset">Spritual Journey</a>
							</p>
						</div>
						<div class="col-lg-3 col-sm-12">
							<h6 class="fw-bold mb-4 color-primary">
								Ministries
							</h6>
							<?php foreach ($minis_cat as $key => $value) { ?>
								<p>
									<a href="<?php echo base_url() . 'ministriescategory?cat_id=' . $value->id; ?>" class="text-reset"><?php echo $value->name; ?></a>
								</p>
							<?php } ?>
						</div>
						<div class="col-lg-3 col-sm-12">
							<h6 class="fw-bold mb-4 color-primary">
								Komunitas
							</h6>
							<p>
								<a href="<?php echo base_url(); ?>" class="text-reset">Nextgen</a>
							</p>
							<p>
								<a href="<?php echo base_url(); ?>" class="text-reset">Carecell</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<h6 class="fw-bold mb-4 color-primary">
								Download Apps
							</h6>
							<p>
								<a href="<?php echo base_url(); ?>" class="text-reset">WTC for Android</a>
							</p>
							<p>
								<a href="<?php echo base_url(); ?>" class="text-reset">WTC for IOS</a>
							</p>
							<br />
							<p>
								<img src="<?php echo base_url() . 'assets/img/android.png'; ?>" />
							</p>
							<p>
								<img src="<?php echo base_url() . 'assets/img/ios.png'; ?>" />
							</p>
						</div>
						<div class="col-lg-6 col-sm-12">
							<h6 class="fw-bold mb-4 color-primary">
								Office
							</h6>
							<p><?php echo $head_office->address; ?></p>
							<p>
								<?php echo $head_office->email; ?>
							</p>
							<p><?php echo $head_office->phone_1; ?></p>
							<?php if (isset($value->phone_2)) { ?>
								<p><?php echo $head_office->phone_2; ?></p>
							<?php } ?>
							<br />
							<p><?php echo $head_office->day; ?></p>
							<p><?php echo $head_office->time; ?></p>
						</div>
					</div>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
			</div>
			<!-- Grid row -->
		</div>
	</section>
	<!-- Section: Links  -->

	<!-- Copyright -->
	<div class="p-4 border-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<a href="<?php echo base_url(); ?>">
						<i class="fab fa-twitter black"></i>
					</a>
					<!-- &nbsp; -->
					<a href="<?php echo base_url(); ?>">
						<i class="fab fa-instagram black"></i>
					</a>
					<!-- &nbsp; -->
					<a href="<?php echo base_url(); ?>">
						<i class="fab fa-facebook black"></i>
					</a>
				</div>
				<div class="col-lg-6 col-sm-12 text-end" style="color: #7C8DB0; font-size:18px;">
					©<?php echo date("Y"); ?>
					<a class="text-reset fw-bold" href="<?php echo base_url(); ?>">World Transformation Church</a>
				</div>
			</div>
		</div>
		<!-- Copyright -->
</footer>
<!-- Footer -->

</body>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/scripts.js"></script>

</html>