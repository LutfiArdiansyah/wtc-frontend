<style type="text/css">
	.title {
		margin-top: 5.672rem;
		font-size: 4.688rem;
		line-height: 2.875rem;
	}

	.desciprtion-title {
		margin-top: 2.906rem;
		margin-bottom: 4.797rem;
		text-align: center;
		font-family: 'Fira Sans', sans-serif;
		font-size: 1.313rem;
	}

	.card {
		height: 21.563rem;
		background-color: #E8E8E8;
		border: none;
		border-radius: 2.344rem;
		margin-bottom: 1.875rem;
	}

	@media (min-width: 992px) {
		.container {
			width: 70.313rem !important;
		}

		.card {
			width: 67.063rem;
		}

		.desciprtion-title {
			width: 52.313rem;
		}

		.container-card {
			width: 56.906rem;
		}

		.btn-learn-more {
			width: 11.688rem;
		}

		.title-communities {
			font-size: 2.578rem;
			line-height: 2.875rem;
		}

		.btn-learn-more {
			height: 3.344rem;

			font-weight: 600;
			font-size: 1.406rem;
			line-height: 2.875rem;
			border-radius: 0.938rem;
		}
	}

	.container-card {
		width: 95%;
		margin: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.description-communities {
		font-size: 0.938rem;
		line-height: 1.25rem;
		font-family: 'Fira Sans', sans-serif;
	}

	.btn-learn-more {
		background-color: var(--bs-primary);
		color: white;
		border: none;
	}
</style>
<?php
	$locale = $this->session->userdata('locale');
	if ($locale === 'en') {
		$caption_button = 'Learn More';
	} else {
		$caption_button = 'Pelajari';
	}
	
?>
<div class="container">
	<h1 class="title fw-bold color-primary mx-auto text-center"><?php echo $data->title; ?></h1>
	<p class="desciprtion-title mx-auto fw-bold"><?php echo $data->description; ?></p>

	<?php foreach ($lists as $key => $value) { ?>
		<div class="card mx-auto">
			<div class="card-body">
				<div class="container-card mx-auto">
					<div class="row align-items-center">
						<div class="col-1"></div>
						<div class="col-3">
							<p class="title-communities fw-bold"><?php echo $value->title; ?></p>
						</div>
						<div class="col-4">
							<p class="description-communities"><?php echo $value->about; ?></p>
						</div>
						<div class="col-3 text-end">
							<a href="./communitydetail?id=<?php echo $value->id; ?>">
								<button class="btn-learn-more btn-hover"><?php echo $caption_button; ?></button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

</div>