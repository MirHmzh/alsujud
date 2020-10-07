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
			<a href="<?= base_url($token) ?>" title="">
				<img src="<?= base_url('assets/img/back.png') ?>" id="back" style="width: 1em" alt="">
			</a>
		</div>
	</div>
	<div class="menu-wrapper">
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/1/'.$token) ?>">
					<div class="menu-item">
						Doa Sebelum Wudhu
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/2/'.$token) ?>">
					<div class="menu-item">
						Doa Sesudah Wudhu
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/3/'.$token) ?>">
					<div class="menu-item">
						Bacaan Ketika Mendengar Adzan
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/4/'.$token) ?>">
					<div class="menu-item">
						Doa Iftitah
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/5/'.$token) ?>">
					<div class="menu-item">
						Doa Ruku'
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/6/'.$token) ?>">
					<div class="menu-item">
						Doa I'tidal
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/7/'.$token) ?>">
					<div class="menu-item">
						Doa Sujud
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/8/'.$token) ?>">
					<div class="menu-item">
						Doa Diantara Dua Sujud
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/9/'.$token) ?>">
					<div class="menu-item">
						Doa Sujud Tilawah
					</div>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<a href="<?= base_url('detil_bacaan_sholat/1/0.$token') ?>">
					<div class="menu-item">
						Doa Tasyahud Akhir
					</div>
				</a>
			</div>
		</div>
	</div>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8"></script>
</html>