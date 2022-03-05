<style type="text/css">
	.carousel-inner {
		padding-top: 25px;
		border-radius: 25px;
	}

	p .description {
		white-space: pre-line;
	}

	.container {
		width: 70.313rem !important;
	}

	.title {
		margin-top: 2.906rem;
		font-weight: 600;
		font-size: 4.688rem;
		line-height: 2.875rem;
	}

	.subtitle {
		margin-top: 2.906rem;
		width: 52.313rem;
		font-family: 'Fira Sans', sans-serif;
		font-weight: bold;
		font-size: 1.313rem;
		line-height: 1.938rem;
	}

	.card {
		background-color: var(--bs-primary);
		border: none;
		border-radius: 0.703rem;
		height: 11.672rem;
		margin-bottom: 1.078rem;
	}

	.title-content {
		margin: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		font-weight: 600;
		font-size: 2.578rem;
		line-height: 2.875rem;
		white-space: pre-line;
		color: white;
		font-family: var(--bs-body-font-family) !important;
	}
</style>
<div class="container text-center">
	<h1 class="fw-bold color-primary title"><?php echo $data->name; ?></h1>
	<p class="subtitle mx-auto"><?php echo $data->description; ?></p>
	<br />
	<div class="text-center w-50 mx-auto">
		<div class="row">
			<div class="col-12">
				<form class="d-flex">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
						<button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
					</div>
					&nbsp;
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-sort"></i>&nbsp;Sort By
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
							<li><a class="dropdown-item" href="#">Name</a></li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br />
	<div class="row">
		<?php foreach ($articles as $key => $value) { ?>
			<div class="col-6 text-center">
				<div class="card mx-auto">
					<div class="card-body">
						<a style="color:white;" href="<?php echo base_url(); ?>articles?id=<?php echo $value->id; ?>">
							<h1 class="title-content"><?php echo $value->title; ?></h1>
						</a>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>