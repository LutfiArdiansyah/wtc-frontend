<style type="text/css">
	p.description {
		white-space: pre-line;
	}
</style>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-4 col-sm-12">
			<h2 class="fw-bold">About GBI WTC</h2><hr/>
		</div>
		<div class="col-lg-8 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p class="description">
					<?php echo $data->about; ?>
				</p>
			</div>
		</div>
	</div>
	<br/>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-sm-12"></div>
		<div class="col-lg-8 col-sm-12">
			<div class="row justify-content-center">
				<div class="col-6">
					<img class="w-100 h-100" src="<?php echo STRAPI_URL.$data->logo_2->url; ?>">
				</div>
				<div class="col-6">
					<img class="w-100 h-100" src="<?php echo STRAPI_URL.$data->logo_1->url; ?>">
				</div>
			</div>
		</div>
	</div>
	<br/>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-sm-12">
			<h2 class="fw-bold">Vision</h2><hr/>
		</div>
		<div class="col-lg-8 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p style="color: var(--bs-primary);"  class="description">
					<?php echo $data->vision; ?>
				</p>
			</div>
		</div>
	</div>
	<br/>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-sm-12">
			<h2 class="fw-bold">Mision</h2><hr/>
		</div>
		<div class="col-lg-8 col-sm-12">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p style="color: var(--bs-primary);" class="description">
					<?php echo $data->mission; ?>
				</p>
			</div>
		</div>
	</div>
	<br/>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-sm-12">
			<h2 class="fw-bold">Leadership</h2><hr/>
		</div>
		<div class="col-lg-8 col-sm-12">
			<div class="row justify-content-center">
				<div class="col-12">
					<?php foreach ($data->wtc_leaderships as $key => $value) {?>
						<div class="row justify-content-center" style="background-color:white; border-radius: 25px; padding: 15px;">
							<div class="col-3">
								<img src="<?php echo isset($value->avatar) ? STRAPI_URL.$value->avatar->url : base_url()."assets/img/avatar.svg";?>" alt="..." style="border-radius:50%;width: 100%; height: same-as-width;">
							</div>
							<div class="col-9">
								<p class="fw-bold"><?php echo $value->name; ?></p>
								<p  class="description">
									<?php echo $value->description; ?>
								</p>
								<p class="fw-bold">
									<span><i class="fab fa-instagram"></i>&nbsp;
										<a href="<?php echo $value->instagram_link_1; ?>" target="_blank"><?php echo $value->instagram_1; ?></a>

									</span>
									<?php if (isset($value->instagram_2)) {?>
										
										&nbsp;
										<span><i class="fab fa-instagram"></i>&nbsp;
											<a href="<?php echo $value->instagram_link_2; ?>" target="_blank"><?php echo $value->instagram_2; ?></a>
										</span>
									<?php } ?>
								</p>
							</div>
						</div>
						<br/>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>