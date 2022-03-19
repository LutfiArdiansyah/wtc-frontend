<style type="text/css">
	p.description {
		white-space: pre-line;
		font-family: 'Fira Sans', sans-serif;
		font-size: 0.938rem;
		line-height: 1.25rem;
	}

	.description p {
		margin-top: 1.25rem;
		font-family: 'Fira Sans', sans-serif;
		font-size: 0.938rem;
		line-height: 1.25rem !important;
	}

	p.description-spirit {
		white-space: pre-line;
		font-family: 'Fira Sans', sans-serif;
		font-size: 0.938rem;
	}

	p.description-values {
		white-space: pre-line;
		font-family: 'Fira Sans', sans-serif;
		font-size: 1.313rem;
		color: var(--bs-primary);
		font-weight: bold;
	}

	p.visimisi {
		white-space: pre-line;
		font-family: 'Fira Sans', sans-serif;
		font-size: 1.313rem;
	}

	.ratio-height {
		height: 4.094rem;
		font-size: 1.688rem;
	}

	.title-about {
		font-size: 2.063rem !important;
		font-weight: bold !important;
		line-height: 2.875rem;
	}

	.content {
		max-width: 69.141rem !important;
	}

	.title-leadership {
		font-size: 1.172rem;
	}

	.description-leadership {
		white-space: pre-line;
		font-family: 'Fira Sans', sans-serif;
		font-size: 0.938rem;
	}

	.btn-learnmore {
		width: 11.688rem;
		height: 3.344rem;
		border-radius: 0.703rem;
		font-size: 1.406rem;
	}
</style>
<div class="container content">
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<p class="fw-bold title-about"><?php echo $data->caption_about; ?> </br>GBI WTC</p>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div style="background-color:white; border-radius: 1.172rem; padding: 0 1.641rem 0.984rem 1.594rem;">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<div class="description">
							<?php echo $this->markdown->parse($data->about_left); ?>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12">
						<div class="description">
							<?php echo $this->markdown->parse($data->about_right); ?>
						</div>
					</div>
					<!-- <div class="col-lg-6 col-sm-12">
						<p class="description">
							Saat ini terhitung ada 15.000 lebih orang percaya dan 57 gereja cabang yang Tuhan percayakan kepada GBI WTC, dan itu akan terus bertambah dan bertumbuh!

							Beragam ministri lahir untuk menduduki dan melayani di ketujuh pilar kehidupan (Pilar Spiritual dan Sosial, Pilar Keluarga, Pilar Bisnis, Pilar Pendidikan, Pilar Pemerintahan dan Politik, Pilar Seni dan Hiburan, Pilar Media). Di dalam bimbingan Senior Pastor, seluruh pelayanan ministri bersinergi untuk menjangkau jiwa-jiwa dan berkontribusi positif bagi penyelesaian berbagai masalah yang terjadi dalam komunitas, kota maupun bangsa selaras keinginan hati Tuhan, sehingga Kerajaan surga bisa ditegakkan di muka bumi.
						</p>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12"></div>
		<div class="col-lg-9 col-sm-12">
			<div class="row justify-content-center">
				<div class="col-5 d-flex flex-wrap align-items-center">
					<img class="" src="<?php echo STRAPI_URL . $data->logo_2->url; ?>">
				</div>
				<div class="col-2"></div>
				<div class="col-5 d-flex flex-wrap align-items-center">
					<img class="" src="<?php echo STRAPI_URL . $data->logo_1->url; ?>">
				</div>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<p class="fw-bold title-about"><?php echo $data->caption_vision; ?></p>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 0 1.594rem 0 1.594rem;">
				<p style="color: var(--bs-primary);" class="visimisi fw-bold">
					<?php echo $data->vision; ?>
				</p>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<p class="fw-bold title-about"><?php echo $data->caption_mission; ?></p>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 0 1.594rem 0 1.594rem;">
				<p style="color: var(--bs-primary);" class="visimisi  fw-bold">
					<?php echo $data->mission; ?>
				</p>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<p id="leadership" class="fw-bold title-about"><?php echo $data->caption_leadership; ?></p>
		</div>
		<div class="col-lg-9 col-sm-12">
			<?php foreach ($data->wtc_leaderships as $key => $value) { ?>
				<div class="justify-content-center d-flex align-items-center text-center mb-3" style="background-color:white; border-radius: 25px; padding: 15px;">
					<div class="col-4 text-center">
						<img src="<?php echo isset($value->avatar) ? STRAPI_URL . $value->avatar->url : base_url() . "assets/img/avatar.svg"; ?>" alt="..." style="border-radius:50%;width: 85%; height: same-as-width;">
					</div>
					<div class="col-8 text-start">
						<p class="fw-bold title-leadership"><?php echo $value->name; ?></p>
						<p class="description">
							<?php echo $value->description; ?>
						</p>
						<br />
						<p class="fw-bold">
							<?php if (isset($value->instagram_1)) { ?>
								<span><i class="fab fa-instagram"></i>&nbsp;
									<a href="<?php echo $value->instagram_link_1; ?>" target="_blank" class="ff-poppin"><?php echo $value->instagram_1; ?></a>

								</span>
							<?php } ?>
							<?php if (isset($value->instagram_2)) { ?>

								&nbsp;
								<span><i class="fab fa-instagram"></i>&nbsp;
									<a href="<?php echo $value->instagram_link_2; ?>" target="_blank" class="ff-poppin"><?php echo $value->instagram_2; ?></a>
								</span>
							<?php } ?>
						</p>
					</div>
				</div>
				<br />
			<?php } ?>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<p id="values" class="fw-bold title-about"><?php echo $data->caption_values; ?></p>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 0 1.594rem 0.5rem 1.594rem;">
				<p class="description-values">
					<?php echo $data->values; ?>
				</p>
			</div>
		</div>
	</div>
	<br />
	<div class="row justify-content-center">
		<div class="col-lg-3 col-sm-12">
			<p id="spiritual-journey" class="fw-bold title-about"><?php echo $spiritual_journey->title; ?></p>
		</div>
		<div class="col-lg-9 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 0 1.594rem 0.5rem 1.594rem;">
				<p class="description-spirit">
					<?php echo $spiritual_journey->description; ?>
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
				<a href="<?php echo base_url() . $spiritual_journey->button_link; ?>">
					<button type="button" class="btn btn-primary btn-learnmore fw-bold" style="background-color: color-primary; color:#fff;"><?php echo $spiritual_journey->button_name; ?></button>
				</a>
			</div>
		</div>
	</div>
</div>
<br />
<br />