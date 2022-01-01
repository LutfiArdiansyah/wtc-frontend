<style type="text/css">
	.carousel-inner {
		padding-top: 25px;
		border-radius: 25px;
	}
</style>
<div class="container text-center">
	<h1 class="fw-bold" style="color: var(--bs-primary);">Outreach</h1>
	<br/>
	<p class="w-75 fw-bold mx-auto">To reach people with the gospel, to disciple them by inculcating the Kingdom of Heaven to become a breakthrough church, to send them as an effective witness in the world.</p>
	<br/>
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
	<br/>
	<div class="row">
		<?php foreach ($datas as $value) {?>
			<div class="col-6 text-center">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="https://images2.minutemediacdn.com/image/upload/c_crop,h_1190,w_2121,x_0,y_176/f_auto,q_auto,w_1100/v1554929522/shape/mentalfloss/538374-istock-940372528.jpg" alt="First slide">
							<div class="carousel-caption d-none d-md-block fw-bold">
								<h5><?php echo $value; ?></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>