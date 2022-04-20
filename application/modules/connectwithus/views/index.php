<style type="text/css">
	.title {
		margin-top: 5.375rem;
		margin-bottom: 6.938rem;
		font-size: 4.688rem;
		line-height: 2.875rem;
	}

	.title-location {
		font-size: 4.688rem;
	}

	.subtitle {
		font-family: 'Poppins', sans-serif;
		font-size: 1.406rem;
	}

	.description {
		font-family: 'Fira Sans', sans-serif;
		font-size: 0.938rem;
		font-weight: normal !important;
	}

	.phone {
		font-weight: bold !important;
	}

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
		width: 75%;
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

	.content {
		max-width: 69.141rem !important;
	}
</style>
<div class="d-lg-none">
	<div class="card">
		<div class="card-body container mx-auto">
			<h1 class="color-primary text-center fw-bold title"><?php echo $contact->title; ?></h1>
			<br />
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<h5 class="fw-bold subtitle"><?php echo $contact->caption_office; ?></h5>
							<br>
							<div class="row">
								<div class="col-12"><i class="far fa-clock color-primary"></i>
									<b class="description"><?php echo $data_worship->day; ?></b>&nbsp;
									<b class="description"><?php echo $data_worship->time; ?></b>
								</div>
								<div class="col-12">
									<br>
									<img src="<?php base_url(); ?>assets/icons/location.png" alt="location">
									<b class="address description"><?php echo $data_worship->adress; ?></b>
								</div>
								<div class="col-12">
									<br>
									<img src="<?php base_url(); ?>assets/icons/envelope.png" alt="envelope">
									<b class="address description"><?php echo $data_worship->email; ?></b>
								</div>
							</div>
						</div>
						&nbsp;
						<div class="col-lg-6 col-sm-12">
							<h5 class="fw-bold subtitle"><?php echo $contact->caption_hotline_number; ?></h5>
							<br>
							<div class="row">
								<div class="col-12 col-sm-6"><img src="<?php base_url(); ?>assets/icons/phone.png" alt="phone">&nbsp;
									<b class="description phone"><?php echo $data_worship->phone_1; ?></b>
								</div>
								<?php if (isset($data_worship->phone_2)) { ?>
									<div class="col-12 col-sm-6"><img src="<?php base_url(); ?>assets/icons/phone.png" alt="phone">&nbsp;
										<b class="description phone"><?php echo $data_worship->phone_2; ?></b>
									</div>
								<?php } ?>
							</div>
							<br>
							<br>
							<h5 class="fw-bold subtitle"><?php echo $contact->caption_socmed; ?></h5>
							<br>
							<div class="row">
								<div class="col-12 col-sm-6"><img src="<?php base_url(); ?>assets/icons/ig.png" alt="ig">
									<a href="<?php echo $data_worship->instagram_link; ?>" target="_blank">
										<b class="description"><?php echo $data_worship->instagram_name; ?></b>
									</a>
								</div>
								<div class="col-12 col-sm-6"><img src="<?php base_url(); ?>assets/icons/yt.png" alt="yt">
									<a href="<?php echo $data_worship->youtube_link; ?>" target="_blank">
										<b class="description"><?php echo $data_worship->youtube_name; ?></b>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				&nbsp;
				<div class="col-lg-6 col-sm-12 text-center">
					<iframe class="w-100 iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $data_worship->maps_link; ?>" style="border: 1px solid black"></iframe><br /><small><a href="<?php echo $data_worship->maps_link; ?>" target="_blank"><?php echo $contact->caption_maps; ?></a></small>
				</div>
			</div>
		</div>
	</div>
	<div class="locations content mx-auto">
		<h1 class="color-primary text-center fw-bold title-location"><?php echo $contact->caption_location; ?></h1>
		<br />
		<div class="row  justify-content-md-center">
			<div class="col-12 text-center">
				<select class="form-select br-10 mx-auto">
					<option selected disabled><?php echo $contact->caption_select_area; ?></option>
					<?php foreach ($areas as $key => $value) { ?>
						<option class="fw-bold" value="<?php echo $value->id; ?>"><?php echo $value->area; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<br />

	</div>

	<div class="row container mx-auto">
		<?php foreach ($worship as $key => $value) { ?>
			<div class="col-sm-12 mb-4">
				<button class="btn btn-primary w-100 btn-list fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $value->id; ?>" aria-expanded="false" aria-controls="collapseExample">
					<?php echo $value->name; ?>
					<span class="carret-dropdown">&nbsp;</span>
				</button>
				<div class="collapse" id="collapse<?php echo $value->id; ?>">
					<div class="card card-body">
						<div class="text-card">
							<p class="title-card"><?php echo $contact->caption_address; ?></p>
							<p class="description-card"><?php echo $value->adress; ?></p>
							<br />
							<p class="title-card"><?php echo $contact->caption_service; ?></p>
							<p class="description-card"><?php echo $value->day; ?></p>
							<p class="description-card"><?php echo $value->time; ?></p>
							<br />
							<p class="title-card"><?php echo $contact->caption_campus_pastor; ?></p>
							<p class="description-card"><?php echo $value->pastor_name; ?></p>
							<br />
							<p class="title-card"><?php echo $contact->caption_contact; ?></p>
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

<div class="d-md-none d-lg-block">
	<div class="card">
		<div class="card-body content mx-auto">
			<h1 class="color-primary text-center fw-bold title"><?php echo $contact->title; ?></h1>
			<br />
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<h5 class="fw-bold subtitle"><?php echo $contact->caption_office; ?></h5>
							<br>
							<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-1"><i class="far fa-clock color-primary"></i></div>
										<div class="col-10"><b class="description"><?php echo $data_worship->day; ?></b></div>
									</div>
									<div class="row">
										<div class="col-1"></div>
										<div class="col-10"><b class="description"><?php echo $data_worship->time; ?></b></div>
									</div>
								</div>
								<div class="col-12">
									<br>
									<div class="row">
										<div class="col-1"><img src="<?php base_url(); ?>assets/icons/location.png" alt="location"></div>
										<div class="col-10"><b class="address description"><?php echo $data_worship->adress; ?></b></div>
									</div>
								</div>
								<div class="col-12">
									<br>
									<div class="row">
										<div class="col-1"><img src="<?php base_url(); ?>assets/icons/envelope.png" alt="envelope"></div>
										<div class="col-10"><b class="address description"><?php echo $data_worship->email; ?></b></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<h5 class="fw-bold subtitle"><?php echo $contact->caption_hotline_number; ?></h5>
							<br>
							<div class="row">
								<div class="col-12"><img src="<?php base_url(); ?>assets/icons/phone.png" alt="phone">&nbsp;
									<b class="description phone"><?php echo $data_worship->phone_1; ?></b>
								</div>
								<?php if (isset($data_worship->phone_2)) { ?>
									<div class="col-12"><img src="<?php base_url(); ?>assets/icons/phone.png" alt="phone">&nbsp;
										<b class="description phone"><?php echo $data_worship->phone_2; ?></b>
									</div>
								<?php } ?>
							</div>
							<br>
							<br>
							<h5 class="fw-bold subtitle"><?php echo $contact->caption_socmed; ?></h5>
							<br>
							<div class="row">
								<div class="col-12"><img src="<?php base_url(); ?>assets/icons/ig.png" alt="ig">
									<a href="<?php echo $data_worship->instagram_link; ?>" target="_blank">
										<b class="description"><?php echo $data_worship->instagram_name; ?></b>
									</a>
								</div>
								<div class="col-12"><img src="<?php base_url(); ?>assets/icons/yt.png" alt="yt">
									<a href="<?php echo $data_worship->youtube_link; ?>" target="_blank">
										<b class="description"><?php echo $data_worship->youtube_name; ?></b>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12 text-center">
					<iframe class="w-100 iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $data_worship->maps_link; ?>" style="border: 1px solid black"></iframe><br /><small><a href="<?php echo $data_worship->maps_link; ?>" target="_blank"><?php echo $contact->caption_maps; ?></a></small>
				</div>
			</div>
		</div>
	</div>
	<div class="locations content mx-auto">
		<h1 class="color-primary text-center fw-bold title-location"><?php echo $contact->caption_location; ?></h1>
		<br />
		<div class="row  justify-content-md-center">
			<div class="col-12 text-center">
				<select class="form-select br-10 mx-auto">
					<option selected disabled><?php echo $contact->caption_select_area; ?></option>
					<?php foreach ($areas as $key => $value) { ?>
						<option class="fw-bold" value="<?php echo $value->id; ?>"><?php echo $value->area; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<br />

	</div>

	<div class="row content mx-auto">
		<?php foreach ($worship as $key => $value) { ?>
			<div class="col-6 mb-4">
				<button class="btn btn-primary w-100 btn-list fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $value->id; ?>" aria-expanded="false" aria-controls="collapseExample">
					<?php echo $value->name; ?>
					<span class="carret-dropdown">&nbsp;</span>
				</button>
				<div class="collapse" id="collapse<?php echo $value->id; ?>">
					<div class="card card-body">
						<div class="text-card">
							<p class="title-card"><?php echo $contact->caption_address; ?></p>
							<p class="description-card"><?php echo $value->adress; ?></p>
							<br />
							<p class="title-card"><?php echo $contact->caption_service; ?></p>
							<p class="description-card"><?php echo $value->day; ?></p>
							<p class="description-card"><?php echo $value->time; ?></p>
							<br />
							<p class="title-card"><?php echo $contact->caption_campus_pastor; ?></p>
							<p class="description-card"><?php echo $value->pastor_name; ?></p>
							<br />
							<p class="title-card"><?php echo $contact->caption_contact; ?></p>
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