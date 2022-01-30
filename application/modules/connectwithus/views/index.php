<style type="text/css">
	.card-body {
		margin: 25px;
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
</style>
<div class="container">
	<div class="card br-15">
		<div class="card-body">
			<h1 class="color-primary text-center fw-bold">Connect with Us</h1>
			<br/>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<h5 class="fw-bold">Office</h5>
							<hr/>
							<div class="row">
								<div class="col-1"><i class="far fa-calendar color-primary"></i></div><div class="col-11"><p><?php echo $data_worship->day; ?></p></div>
								<div class="col-1"><i class="far fa-clock color-primary"></i></div><div class="col-11"><p><?php echo $data_worship->time; ?></p></div>
								<div class="col-1"><i class="far fa-map-marker-alt color-primary"></i></div><div class="col-11"><p class="address"><?php echo $data_worship->address; ?></p></div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<h5 class="fw-bold">Hotline Number</h5>
							<hr/>
							<div class="row">
								<div class="col-1"><i class="far fa-phone color-primary"></i></div><div class="col-11"><p><?php echo $data_worship->phone_1; ?></p></div>
								<?php if (isset($data_worship->phone_2)) {?>
									<div class="col-1"><i class="far fa-phone color-primary"></i></div><div class="col-11"><p><?php echo $data_worship->phone_2; ?></p></div>									
								<?php } ?>
							</div>
							<br/>
							<h5 class="fw-bold">Social Media</h5>
							<hr/>
							<div class="row">
								<div class="col-1"><i class="fab fa-instagram color-primary"></i></div>
								<div class="col-11">
									<a href="<?php echo $data_worship->instagram_link; ?>" target="_blank"><p><?php echo $data_worship->instagram_name; ?></p></a>
								</div>
								<div class="col-1"><i class="fab fa-youtube color-primary"></i></div>
								<div class="col-11">
									<a href="<?php echo $data_worship->youtube_link; ?>" target="_blank"><p><?php echo $data_worship->youtube_name; ?></p></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12 text-center">
					<iframe class="w-100 iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $data_worship->maps_link; ?>" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=-6.27652&amp;mlon=106.66338#map=19/-6.27652/106.66338" target="_blank">View Larger Map</a></small>
				</div>
			</div>
		</div>
	</div>
	<div class="locations">
		<h1 class="color-primary text-center fw-bold">Locations</h1>
		<br/>
		<div class="row  justify-content-md-center">
			<div class="col-4">
				<select class="form-select br-10">
					<option selected disabled>Select Area</option>
					<?php foreach ($areas as $key => $value) { ?>
						<option class="fw-bold" value="<?php echo $value->id; ?>"><?php echo $value->area; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<br/>
		<div class="row  justify-content-md-center">
			<?php foreach ($worship as $key => $value) {?>
				
				<div class="col-lg-8 col-sm-12 mt-4">
					<div class="card br-15">
						<div class="card-body">
							<div class="row ">
								<div class="col-lg-6 col-sm-12">
									<h5 class="color-primary">WTC</h5>
									<h5 class="fw-bold color-primary"><?php echo $value->name; ?></h5>
								</div>
								<div class="col-lg-6 col-sm-12">
									<h5 class="color-primary text-end"><a class="color-primary" href="tel:<?php echo $value->phone_1; ?>">Contact</a></h5>
								</div>
							</div>
							<br/>
							<div class="row ">
								<div class="col-4">
									<p class="fw-bold">Address</p>
									<p><?php echo $value->address; ?></p>
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

			<?php } ?>

		</div>
		
	</div>
</div>
<br/>
<br/>
<script type="text/javascript">
	$( document ).ready(function() {
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