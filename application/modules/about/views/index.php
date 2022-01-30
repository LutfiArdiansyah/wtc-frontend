<style type="text/css">
	p.description {
		white-space: pre-line;
		font-family: 'Fira Sans', sans-serif;
		font-size: 1.25rem;
	}
	.ratio-height {
		height: 4.094rem;
		font-size: 1.688rem;
	}
	.title-about {
		font-size: 3.438rem;
	}
</style>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<h2 class="fw-bold title-about">About GBI WTC</h2>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p class="description">
					<?php echo $data->about; ?>
				</p>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12"></div>
		<div class="col-lg-9 col-sm-12">
			<div class="row justify-content-center">
				<div class="col-6 d-flex flex-wrap align-items-center">
					<img class="w-100 " src="<?php echo STRAPI_URL . $data->logo_2->url; ?>">
				</div>
				<div class="col-6 d-flex flex-wrap align-items-center">
					<img class="w-100" src="<?php echo STRAPI_URL . $data->logo_1->url; ?>">
				</div>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<h2 class="fw-bold title-about">Vision</h2>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p style="color: var(--bs-primary);" class="description">
					<?php echo $data->vision; ?>
				</p>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<h2 class="fw-bold title-about">Mision</h2>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p style="color: var(--bs-primary);" class="description">
					<?php echo $data->mission; ?>
				</p>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<h2 class="fw-bold title-about">Leadership</h2>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div class="row justify-content-center">
				<div class="col-12">
					<?php foreach ($data->wtc_leaderships as $key => $value) { ?>
						<div class="row justify-content-center d-flex align-items-center text-center" style="background-color:white; border-radius: 25px; padding: 15px;">
							<div class="col-4 text-center">
								<img src="<?php echo isset($value->avatar) ? STRAPI_URL . $value->avatar->url : base_url() . "assets/img/avatar.svg"; ?>" alt="..." style="border-radius:50%;width: 85%; height: same-as-width;">
							</div>
							<div class="col-8">
								<p class="fw-bold"><?php echo $value->name; ?></p>
								<p class="description">
									<?php echo $value->description; ?>
								</p>
								<p class="fw-bold">
									<span><i class="fab fa-instagram"></i>&nbsp;
										<a href="<?php echo $value->instagram_link_1; ?>" target="_blank"><?php echo $value->instagram_1; ?></a>

									</span>
									<?php if (isset($value->instagram_2)) { ?>

										&nbsp;
										<span><i class="fab fa-instagram"></i>&nbsp;
											<a href="<?php echo $value->instagram_link_2; ?>" target="_blank"><?php echo $value->instagram_2; ?></a>
										</span>
									<?php } ?>
								</p>
							</div>
						</div>
						<br />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<h2 class="fw-bold title-about">Spiritual Journey</h2>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p class="description">
					Help and encourage the congregation to actively participate in the journey of spiritual growth in the church and be involved in the church according to their calling. Churches and congregations are connected to each other without limits to synergize together and grow as one unitary Body of Christ.
				</p>
			</div>
		</div>
	</div>
	<br />
	<div class="row ">
		<div class="col-lg-3 col-sm-12">
		</div>
		<div class="col-lg-3 col-sm-12">
			<div>
				<a href="<?php echo base_url()."spiritualjourney"; ?>">
					<button type="button" class="btn btn-primary w-100 br-10 ratio-height" style="background-color: color-primary; color:#fff;">Learn More</button>
				</a>
			</div>
		</div>
	</div>
</div>
<br/>
<br/>