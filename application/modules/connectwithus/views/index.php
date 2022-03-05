<style type="text/css">
	.locations {
		padding-top: 2.5em;
	}

	p .address {
		white-space: pre-line;
	}

	.iframe {
		min-height: 250px;
	}

	.card-body {
		margin: 0;
		padding: 34px;
	}

	.container {
		width: 70.313rem !important;
	}

	.btn-list {
		height: 70px;
		border-radius: 0;
		text-align: left;
		padding-left: 34px;
		padding-right: 34px;
		font-size: 22.5px;
		line-height: 20px;
	}

	.card {
		border: none;
	}

	.text-card {
		width: 418px;
	}

	select {
		height: 66.46px;
		border-radius: 15px;
		border: none !important;
		text-align: center;
		font-weight: 600;
		font-size: 24px !important;
		line-height: 52px !important;
		width: 454.4px !important;
		margin-bottom: 50px;
		/* color: #AEAEAE !important; */
	}

	.description-card {
		white-space: pre-line;
		font-family: 'Fira Sans', sans-serif;
		font-size: 20px;
		line-height: 34px;
		margin-bottom: 0;
	}

	.title-card {
		font-family: 'Fira Sans', sans-serif;
		font-weight: bold;
		font-size: 20px;
		line-height: 34px;
		margin-bottom: 0;
	}

	.carret-dropdown {
		float: right;
		background: url(assets/icons/caret-right-solid.svg) no-repeat;
		width: 25px;
		height: 25px;
		display: block;
		color: white;
	}

	.carret-dropdown:before {
		float: right;
		background: url(assets/icons/caret-down-solid.svg) no-repeat !important;
		width: 25px;
		height: 25px;
		display: block;
	}

	.direction {
		background: url(assets/icons/directions.svg) no-repeat !important;
		width: 85px;
		height: 85px;
		margin: 0;
		position: absolute;
		top: 34px;
		right: 34px;
	}
</style>
<div class="container">
	<div class="card br-15">
		<div class="card-body">
			<h1 class="color-primary text-center fw-bold">Connect with Us</h1>
			<br />
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<h5 class="fw-bold">Office</h5>
							<hr />
							<div class="row">
								<div class="col-1"><i class="far fa-calendar color-primary"></i></div>
								<div class="col-11">
									<p><?php echo $data_worship->day; ?></p>
								</div>
								<div class="col-1"><i class="far fa-clock color-primary"></i></div>
								<div class="col-11">
									<p><?php echo $data_worship->time; ?></p>
								</div>
								<div class="col-1"><i class="far fa-map-marker-alt color-primary"></i></div>
								<div class="col-11">
									<p class="address"><?php echo $data_worship->address; ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<h5 class="fw-bold">Hotline Number</h5>
							<hr />
							<div class="row">
								<div class="col-1"><i class="far fa-phone color-primary"></i></div>
								<div class="col-11">
									<p><?php echo $data_worship->phone_1; ?></p>
								</div>
								<?php if (isset($data_worship->phone_2)) { ?>
									<div class="col-1"><i class="far fa-phone color-primary"></i></div>
									<div class="col-11">
										<p><?php echo $data_worship->phone_2; ?></p>
									</div>
								<?php } ?>
							</div>
							<br />
							<h5 class="fw-bold">Social Media</h5>
							<hr />
							<div class="row">
								<div class="col-1"><i class="fab fa-instagram color-primary"></i></div>
								<div class="col-11">
									<a href="<?php echo $data_worship->instagram_link; ?>" target="_blank">
										<p><?php echo $data_worship->instagram_name; ?></p>
									</a>
								</div>
								<div class="col-1"><i class="fab fa-youtube color-primary"></i></div>
								<div class="col-11">
									<a href="<?php echo $data_worship->youtube_link; ?>" target="_blank">
										<p><?php echo $data_worship->youtube_name; ?></p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12 text-center">
					<iframe class="w-100 iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $data_worship->maps_link; ?>" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=-6.27652&amp;mlon=106.66338#map=19/-6.27652/106.66338" target="_blank">View Larger Map</a></small>
				</div>
			</div>
		</div>
	</div>
	<div class="locations">
		<h1 class="color-primary text-center fw-bold">Locations</h1>
		<br />
		<div class="row  justify-content-md-center">
			<div class="col-12 text-center">
				<select class="form-select br-10 mx-auto">
					<option selected disabled>Select Area</option>
					<?php foreach ($areas as $key => $value) { ?>
						<option class="fw-bold" value="<?php echo $value->id; ?>"><?php echo $value->area; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<br />

	</div>

	<div class="row">
		<?php foreach ($worship as $key => $value) { ?>
			<div class="col-6">
				<button class="btn btn-primary w-100 btn-list fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $value->id; ?>" aria-expanded="false" aria-controls="collapseExample">
					WTC Ballroom
					<span class="carret-dropdown">&nbsp;</span>
				</button>
				<div class="collapse" id="collapse<?php echo $value->id; ?>">
					<div class="card card-body">
						<div class="text-card">
							<p class="title-card">Address</p>
							<p class="description-card"><?php echo $value->address; ?></p>
							<br />
							<p class="title-card">Services</p>
							<p class="description-card"><?php echo $value->day; ?></p>
							<p class="description-card"><?php echo $value->time; ?></p>
							<br />
							<p class="title-card">Campus Pastor</p>
							<p class="description-card"><?php echo $value->pastor_name; ?></p>
							<br />
							<p class="title-card">Contact</p>
							<p class="description-card"><?php echo $value->email; ?></p>
							<p class="description-card"><?php echo $value->phone_1; ?></p>
						</div>
						<a href="#">
							<span class="direction">&nbsp;</span>
						</a>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

</div>
<br />
<br />
<script type="text/javascript">
	$(document).ready(function() {
		const urlParams = new URLSearchParams(window.location.search);
		const areaId = urlParams.get('area_id');
		if (areaId) {
			$('select').val(areaId)
		}
		$('select').on('change', function() {
			window.location.href = window.location.href.split('?')[0] + "?area_id=" + this.value;
		});
	});
</script>