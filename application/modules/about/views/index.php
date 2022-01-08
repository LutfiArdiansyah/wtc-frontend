<div class="container">
	<div class="row justify-content-center">
		<div class="col-4">
			<h2>About GBI WTC</h2>
		</div>
		<div class="col-8">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p>
					<?php echo $data->about; ?>
				</p>
			</div>
		</div>
	</div>
	<br/>
	<div class="row justify-content-center">
		<div class="col-4"></div>
		<div class="col-8">
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
		<div class="col-4">
			<h2>Vision</h2>
		</div>
		<div class="col-8">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p style="color: var(--bs-primary);">
					<?php echo $data->vision; ?>
				</p>
			</div>
		</div>
	</div>
	<br/>
	<div class="row justify-content-center">
		<div class="col-4">
			<h2>Mision</h2>
		</div>
		<div class="col-8">
			<div style="background-color:white; border-radius: 25px; padding: 15px;">
				<p style="color: var(--bs-primary);">
					<?php echo $data->mission; ?>
				</p>
			</div>
		</div>
	</div>
	<br/>
	<div class="row justify-content-center">
		<div class="col-4">
			<h2>Leadership</h2>
		</div>
		<div class="col-8">
			<div class="row justify-content-center">
				<div class="col-12">
					<?php for ($x = 0; $x <= 3; $x++) {?>
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
</div>