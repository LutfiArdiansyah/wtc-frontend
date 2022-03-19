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
		font-size: 0.938rem;
		font-weight: bold;
	}

	p {
		color: black;
		font-size: 1.25rem;
	}

	h6 {
		font-size: 0.938rem;
		font-weight: bold;
	}

	.apps-logo {
		height: 2.344rem;
	}

	.copyright {
		color: #7C8DB0;
		font-size: 0.844rem;
		font-family: 'Nunito Sans', sans-serif;
	}
</style>
<br><br><br>

<?php
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_PORT => "1337",
	CURLOPT_URL => STRAPI_URL . '/wtc-footer?_locale=' . $this->session->userdata('locale'),
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"cache-control: no-cache",
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	header('Location: ' . base_url() . 'internalservererror');
	return;
} else {
	$data = json_decode($response);
}
?>

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
						<div class="col-lg-2 col-sm-12"></div>
						<div class="col-lg-3 col-sm-4">
							<h6 class="fw-bold mb-4 color-primary">
								<?php echo $data->about; ?>
								<!-- About Section -->
							</h6>
							<?php foreach ($data->about_list as $key => $value) { ?>
								<p>
									<a href="<?php echo base_url() . $value->link; ?>" class="text-reset"><?php echo $value->name; ?></a>
								</p>
							<?php } ?>
						</div>
						<div class="col-lg-3 col-sm-4">
							<h6 class="fw-bold mb-4 color-primary">
								<?php echo $data->ministry; ?>
								<!-- Ministry Section -->
							</h6>
							<?php foreach ($data->ministry_list as $key => $value) { ?>
								<p>
									<a href="<?php echo base_url() . $value->link; ?>" class="text-reset"><?php echo $value->name; ?></a>
								</p>
							<?php } ?>
						</div>
						<div class="col-lg-4 col-sm-4">
							<h6 class="fw-bold mb-4 color-primary">
								<?php echo $data->community; ?>
								<!-- Community Section -->
							</h6>
							<?php foreach ($data->community_list as $key => $value) { ?>
								<p>
									<a href="<?php echo base_url() . $value->link; ?>" class="text-reset"><?php echo $value->name; ?></a>
								</p>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-sm-4">
							<h6 class="fw-bold mb-4 color-primary">
								<?php echo $data->download; ?>
								<!-- Download Section -->
							</h6>
							<?php foreach ($data->download_list as $key => $value) { ?>
								<p>
									<a href="<?php echo $value->link; ?>" class="text-reset" target="_blank"><?php echo $value->name; ?></a>
								</p>
							<?php } ?>

							<p>
								<img class="apps-logo" src="<?php echo base_url() . 'assets/img/android.png'; ?>" />
							</p>
							<p>
								<img class="apps-logo" src="<?php echo base_url() . 'assets/img/ios.png'; ?>" />
							</p>
						</div>
						<div class="col-lg-5 col-sm-8">
							<h6 class="fw-bold mb-4 color-primary">
								<?php echo $data->secretary_office; ?>
								<!-- Secretary Office Section -->
							</h6>
							<p><a class="text-reset"><?php echo $head_office->adress; ?></a></p>
							<!-- <p>
								<?php echo $head_office->email; ?>
							</p>
							<p><?php echo $head_office->phone_1; ?></p>
							<?php if (isset($value->phone_2)) { ?>
								<p><?php echo $head_office->phone_2; ?></p>
							<?php } ?> -->
							<br />
							<p><a class="text-reset"><?php echo $head_office->day; ?></a></p>
							<p><a class="text-reset"><?php echo $head_office->time; ?></a></p>
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
				<div class="col-lg-1 col-sm-12"></div>
				<div class="col-lg-5 col-sm-12">
					<a href="<?php echo base_url(); ?>">
						<i class="fab fa-twitter black"></i>
					</a>
					<!-- &nbsp; -->
					<a href="<?php echo base_url(); ?>">
						<i class="fab fa-instagram black"></i>
					</a>
					<!-- &nbsp; -->
					<a href="<?php echo base_url(); ?>">
						<i class="fab fa-facebook-square black"></i>
					</a>
				</div>
				<div class="col-lg-5 col-sm-12 text-end">
					<span class="copyright fw-bold">©<?php echo date("Y"); ?> World Transformation Church</span>
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