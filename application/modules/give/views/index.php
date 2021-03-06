<style type="text/css">
	.vertical-center {
		display: flex;
		align-items: center;
	}

	hr {
		color: #000000;
		border: 1.5px solid #000000;
	}

	.card {
		border: none !important;
	}

	.container-card {
		margin-left: 11.125rem;
		margin-right: 11.125rem;
	}

	.desc-qris p {
		font-family: 'Fira Sans', sans-serif;
		font-style: normal;
		font-weight: normal;
		font-size: 0.938rem;
		line-height: 1.25rem;
	}

	.rekening-title {
		font-style: normal;
		font-weight: bold;
		font-size: 0.938rem;
		line-height: 1.25rem;
	}

	.rekening-detail p {
		font-family: 'Fira Sans', sans-serif;
		font-style: normal;
		font-weight: normal;
		font-size: 0.938rem;
		line-height: 1.25rem;
		white-space: pre-line;
	}

	@media (min-width: 992px) {
		.w-card {
			width: 70.25rem;
		}
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="card mx-auto w-card" style=" border-radius:1.875rem;">
				<div class="card-body">
					<div class="container-card">
						<div class="row">
							<div class="col-lg-6 col-sm-12" style="margin-top: 3.625rem;">
								<h1 style="white-space:pre-line;font-size:4.688rem; font-weight: 600; line-height: 4.394rem;" class="fw-bold color-primary"><?php echo $data->title; ?></h1>
								<br />
								<p style="font-size: 1.313rem;" class="ff-fira"><?php echo $data->description; ?></p>
							</div>
							<div class="col-lg-6 col-sm-12 text-center" style="margin-top: 2.719rem;">
								<a rel='nofollow' href='<?php echo base_url(); ?>' border='0' style='cursor:default' target="_blank"><img style="width: 250px; height: 250px;" src='<?php echo STRAPI_URL . $data->qc_code->url; ?>'></a>
							</div>
						</div>
						<br />
						<br />
						<div class="row">
							<?php foreach ($data->payment_mathod as $key => $value) { ?>
								<div class="col-lg-2 col-sm-12 vertical-center">
									<a href="<?php echo base_url() ?>" target="_blank" class="mx-auto">
										<img class="w-100" src="<?php echo STRAPI_URL . $value->url; ?>">
									</a>
								</div>
							<?php } ?>
						</div>
						<hr />
						<br />
						<div class="row">
							<div class="col-lg-4 col-sm-12">
								<p class="fw-bold mx-auto" style="font-size: 1.547rem;line-height: 1.774rem;">Tentang QRIS</p>
							</div>
							<div class="col-lg-8 col-sm-12">
								<div class="desc-qris"><?php echo $this->markdown->parse($data->qris_description); ?></div>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-lg-4 col-sm-12">
								<p style="
								font-style: normal;
								font-weight: bold;
								font-size: 1.547rem;
								line-height: 1.75rem;
								">Rekening Persembahan</p>
								<p style="
								font-family: 'Fira Sans', sans-serif;
								font-style: normal;
								font-size: 0.813rem;
								line-height: 1rem;
								">
									Nama Rekening:
									<br />
									<strong><?php echo $data->account_name; ?></strong>
								</p>
							</div>
							<div class="col-lg-8 col-sm-12">
								<div class="rekening-detail">
									<?php echo $this->markdown->parse($data->account_detail); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>