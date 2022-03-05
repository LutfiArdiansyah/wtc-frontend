<style type="text/css">
	.container {
		width: 70.313rem !important;
	}

	.title {
		margin-top: 5.672rem;
		font-size: 4.688rem;
		line-height: 2.875rem;
	}

	.desciprtion-title {
		margin-top: 2.906rem;
		margin-bottom: 4.797rem;
		width: 52.313rem;
		text-align: center;
		font-family: 'Fira Sans', sans-serif;
	}

	.card {
		width: 67.063rem;
		height: 21.563rem;
		background-color: #E8E8E8;
		border: none;
		border-radius: 2.344rem;
		margin-bottom: 1.875rem;
	}

	.container-card {
		margin: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 56.906rem;
	}

	.title-communities {
		font-size: 2.578rem;
		line-height: 2.875rem;
	}

	.description-communities {
		font-size: 0.938rem;
		line-height: 1.25rem;
		font-family: 'Fira Sans', sans-serif;
	}

	.btn-learn-more {
		width: 11.688rem;
		height: 3.344rem;
		background-color: var(--bs-primary);
		color: white;
		border-radius: 0.938rem;
		border: none;
		font-weight: 600;
		font-size: 1.406rem;
		line-height: 2.875rem;
	}
</style>
<div class="container">
	<h1 class="title fw-bold color-primary mx-auto text-center"><?php echo $data->title; ?></h1>
	<p class="desciprtion-title mx-auto fw-bold"><?php echo $data->description; ?></p>
	<div class="card mx-auto">
		<div class="card-body">
			<div class="container-card mx-auto">
				<div class="row">
					<div class="col-3">
						<p class="title-communities fw-bold">Nextgen</p>
					</div>
					<div class="col-6">
						<p class="description-communities">Melayani kebutuhan jemaat dan memperlengkapi mereka untuk terlibat dalam pekerjaan Tuhan bagi hidup yang diberkati dan memberkati.</p>
					</div>
					<div class="col-3">
						<a href="./communitydetail?id=Nextgen">
							<button class="btn-learn-more">Learn More</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card mx-auto">
		<div class="card-body">
			<div class="container-card mx-auto">
				<div class="row">
					<div class="col-3">
						<p class="title-communities fw-bold">Carecell</p>
					</div>
					<div class="col-6">
						<p class="description-communities">Melayani kebutuhan jemaat dan memperlengkapi mereka untuk terlibat dalam pekerjaan Tuhan bagi hidup yang diberkati dan memberkati.</p>
					</div>
					<div class="col-3">
						<a href="./communitydetail?id=Carecell">
							<button class="btn-learn-more">Learn More</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card mx-auto">
		<div class="card-body">
			<div class="container-card mx-auto">
				<div class="row">
					<div class="col-3">
						<p class="title-communities fw-bold">Global Church</p>
					</div>
					<div class="col-6">
						<p class="description-communities">Melayani kebutuhan jemaat dan memperlengkapi mereka untuk terlibat dalam pekerjaan Tuhan bagi hidup yang diberkati dan memberkati.</p>
					</div>
					<div class="col-3">
						<a href="./communitydetail?id=Global%20Church">
							<button class="btn-learn-more">Learn More</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>