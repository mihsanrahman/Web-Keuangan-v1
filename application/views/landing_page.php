<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Penggajian</title>
	<!-- StyleSheets -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/fontawesome/css/all.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css" />

	<style>
		.navbar-brand img {
			width: 150px;
			height: auto;
		}

		.navbar-text {
			padding-top: 10px;
		}

		.nav-link {
			margin-top: 10px;
		}
	</style>
</head>

<body>
	<!-- Header Section -->
	<div class="Header" id="Home">
		<nav class="navbar fixed-top">
			<div class="container">
				<div class="row">
					<div class="col">
						<a class="navbar-brand" href="#">
							<img src="<?php echo base_url('assets/img/logo-allsys.png'); ?>" alt="Logo Allsys">
						</a>
					</div>
				</div>
				<div class="collapse_menu deactive">
					<i class="fa fa-bars" aria-hidden="true"></i>
					<i class="fa fa-times" aria-hidden="true"></i>
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('auth'); ?>">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="banner">
			<div class="layer">
				<div class="row Section">
					<div class="col">
						<div class="box">
							<div>
								<h2><b><i>SISTEM INFORMASI KEUANGAN</i></b></h2>
							</div>
							<p>Selmat datang di aplikasi Sistem Informasi Keuangan <br>PT. Allsys Solutions</p>
						</div>
					</div>
					<div class="col headerImg" style="background-image: url('<?php echo base_url() ?>assets/img/uangg.svg');"></div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Service Section -->


	<!-- Footer Section -->
	<div class="Footer" id="Footer">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center my-3">
					Copyright &copy; Muhammad Ihsan Rahman | SIK 2023 - All Rights Reserved
				</div>
			</div>
		</div>
	</div>
	<!-- Javascripts -->
	<script src="<?php echo base_url(); ?>assets/landing/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/landing/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/landing/js/script.js"></script>
</body>

</html>
