<!DOCTYPE html>
<html>
<head>
	<title>AlSujud</title>
</head>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<style type="text/css">
	@font-face {
	  font-family: Philosopher;
	  src: url(<?= base_url('assets/font/') ?>Philosopher.ttf);
	}
	@font-face {
	  font-family: Centabel;
	  src: url(<?= base_url('assets/font/') ?>Centabel.ttf);
	}
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
		background-color: #fff;
		border-radius: 0.5em;
		padding: 0.5em 0em;
		margin: 0.2em 2em;
		font-family: Centabel;
	}

	.menu-logo{
		text-align: center;
		padding: 0.5em 0em;
		margin: 0.2em 2em;
		background: rgba(255,255,255,0.7);
	    border-radius: 100%;
	    display: inline-block;
	    text-align: center;
	    padding: 1.5em;
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
	.page-brand img{
		width: 8em;
	}
	.page-title{
		color: #e2e797;
		font-size: 1.5em;
		text-align: center;
		background-color: rgba(255,255,255,0.5);
		border-radius: 0.2em;
		font-family: Philosopher;
	}
	.page-title-wrapper{
		padding: 0.3em 4em 1em 4em;
	}
	.menu-wrapper{
		background-color: #e2cab3;
		position: relative;
		width: 101%;
		left: -0.5%;
		border-radius: 15% 15% 15% 15% / 7% 7% 7% 7%;
		padding: 1em 0em 2em 0em;
		/*display: none;*/
	}
	#cloud-left{
		position: absolute;
		bottom: 0%;
	}
	#cloud-right{
		position: absolute;
		transform: rotateY(180deg);
		right: 0%;
		bottom: 0%;
	}
	.menu-logo img{
		width: 3em;
	}
	.menu-logo-wrapper{
		text-align: center;
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
	<div class="row justify-content-center">
		<div class="page-brand">
			<img src="<?= base_url('assets/img/logo.png') ?>" alt="">
		</div>
	</div>
	<div class="row justify-content-center page-title-wrapper">
		<div class="col-12 page-title">
			Dzikir Pilihan
		</div>
	</div>
	<div class="menu-wrapper">
		<div class="row justify-content-center">
			<div class="col-12 menu-logo-wrapper">
				<div class="menu-logo">
					<img src="<?= base_url('assets/img/sun.png') ?>" alt="">
				</div>
			</div>
		</div>
		<a href="<?= base_url('detil_dzikir/1/'.$token) ?>">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="menu-item">
						Dzikir Pagi
					</div>
				</div>
			</div>
		</a>
		<div class="row justify-content-center">
			<div class="col-12 menu-logo-wrapper">
				<div class="menu-logo">
					<img src="<?= base_url('assets/img/forecast.png') ?>" alt="">
				</div>
			</div>
		</div>
		<a href="<?= base_url('detil_dzikir/2/'.$token) ?>">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="menu-item">
						Dzikir Petang
					</div>
				</div>
			</div>
		</a>
		<div class="row justify-content-center">
			<div class="col-12 menu-logo-wrapper">
				<div class="menu-logo">
					<img src="<?= base_url('assets/img/moon.png') ?>" alt="">
				</div>
			</div>
		</div>
		<a href="<?= base_url('detil_dzikir/3/'.$token) ?>">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="menu-item">
						Dzikir Menjelang Tidur
					</div>
				</div>
			</div>
		</a>
	</div>
	<div id="cloud-left">
		<img src="<?= base_url('assets/img/cloud.png') ?>" alt="">
	</div>
	<div id="cloud-right">
		<img src="<?= base_url('assets/img/cloud.png') ?>" alt="">
	</div>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8"></script>
</html>