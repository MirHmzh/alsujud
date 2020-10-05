<!DOCTYPE html>
<html>
<head>
	<title>AlSujud</title>
</head>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<style type="text/css">
	body{
		background-color: #313e28;
		color: #313e28;
		font-size: 2.5em;
		font-weight: 700;
	}
	.row{
		margin: 0;
	}
	#compass-wrapper{
		text-align: right;
		padding: 0.5em;

	}
	#logo-wrapper{
		text-align: center;
	}
	.menu-item{
		text-align: center;
		background-color: #e2e797;
		border-radius: 0.5em;
		padding: 0.5em 0em;
		margin: 0.2em 2em;
	}

	.menu-logo{
		text-align: center;
		padding: 0.5em 0em;
		margin: 0.2em 2em;
	}
	a{
		text-decoration: none;
		color: #313e28;
	}
	a:link {
	  text-decoration: none;
	  color: #313e28;
	}

	a:visited {
	  text-decoration: none;
	  color: #313e28;
	}
	a:click{
		text-decoration: none;
		color: #313e28;
	}
	a:active{
		text-decoration: none;
		color: #313e28;
	}
</style>
<body>
	<div class="row">
		<div class="col-12">
			<a href="<?= base_url('main') ?>" title="">
				<img src="<?= base_url('assets/img/back.png') ?>" id="back" style="width: 1em" alt="">
			</a>
		</div>
	</div>
	<div class="menu-wrapper">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="menu-logo">
					<img src="<?= base_url('assets/img/compass.png') ?>" alt="">
				</div>
			</div>
		</div>
		<a href="<?= base_url('main/detil_setelah_sholat/1') ?>">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="menu-item">
						Dzikir Pagi dan Petang
					</div>
				</div>
			</div>
		</a>
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="menu-logo">
					<img src="<?= base_url('assets/img/compass.png') ?>" alt="">
				</div>
			</div>
		</div>
		<a href="<?= base_url('main/detil_setelah_sholat/2') ?>">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="menu-item">
						Dzikir Menjelang Tidur
					</div>
				</div>
			</div>
		</a>
	</div>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8"></script>
</html>