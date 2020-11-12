<!DOCTYPE html>
<html>
<head>
	<title>AlSujud</title>
</head>
<link rel="icon" href="<?= base_url('assets/img/logo_qr.jpg') ?>" sizes="16x16">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<style type="text/css">
	@font-face {
	  font-family: Lora;
	  src: url(<?= base_url('assets/font/') ?>Lora.ttf);
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
		padding: 0.9em 0em;
		margin: 0.5em 3em;
		font-family: Centabel;
		font-size: 1.2em;
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
	.splash{
		position: absolute;
		height: 100vh;
		width: 100vw;
	}
	.brand{
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.brand-splash{
		font-family: Lora;
		color: #e2e797;
		position: fixed;
		top: 90%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.brand-footer{
		font-family: Lora;
		font-weight: 900;
	}
	.content{
		overflow: hidden;
		display: none;
	}
	#cloud-left{
		position: absolute;
		transform: rotateX(180deg);
	}
	#cloud-right{
		position: absolute;
		transform: rotate(180deg);
		right: 0%;
	}
	.logo-spacer{
		color: #e2e797;
		border: 1px solid #e2e797;
		width: 40%;
	}
	.menu-wrapper{
		background-color: #e2cab3;
		position: relative;
		width: 101%;
		left: -0.5%;
		border-radius: 15% 15% 10% 10% / 11% 11% 0% 0%;
		padding: 3em 0em 3em 0em;
		/*display: none;*/
	}
	.menu-icon{
		background-color: #313e28;
		position: relative;
		padding: 1.5em 0.3em;
		left: 3em;
		top: 3.5em;
		border-radius: 0.3em;
	}
	.menu-icon img{
		width: 2.8em;
	}
	.flower-wrapper{
		opacity: 23%;
	}
	.flower-wrapper div img{
		width: 8em;
	}
	.flower-right{
		transform: rotate(180deg);
		position: relative;
		right: 10%;
		top: 1em;
		display: inline-block;
		float: right;
	}
	.flower-left{
		transform: rotateX(180deg);
		position: relative;
		left: 10%;
		top: 1em;
		display: inline-block;
	}
	.footer-wrapper{
		padding: 0.3em 0em 0.3em 0em;
		background-color: #fff;
	}
	.brand-footer div{
		position: relative;
		bottom: -2em;
	}
	.compass-icon{
		text-align: right;
	}
	.compass-icon img{
		width: 3em;
	}
	.menu-item-wrapper .col-12{
		margin-top: -2.2em;
	}
</style>
<body>
	<div class="splash">
		<div class="brand">
			<img src="<?= base_url('assets/img/logo.png') ?>">
		</div>
		<div class="brand-splash">
			alsujud.com
		</div>
	</div>
	<div class="content">
		<div id="cloud-left">
			<img src="<?= base_url('assets/img/cloud.png') ?>" alt="">
		</div>
		<div id="cloud-right">
			<img src="<?= base_url('assets/img/cloud.png') ?>" alt="">
		</div>
		<br>
		<br>
		<div class="row justify-content-center">
			<div class="col-12" id="logo-wrapper">
				<img src="<?= base_url('assets/img/logo.png') ?>">
				<hr class="logo-spacer">
			</div>
		</div>
		<div class="row flower-wrapper">
			<div class="col-6 flower-left">
				<img src="<?= base_url('assets/img/flower.png') ?>" alt="">
			</div>
			<div class="col-6 flower-right">
				<img src="<?= base_url('assets/img/flower.png') ?>" alt="">
			</div>
			<div class="clear"></div>
		</div>
		<div class="menu-wrapper">
			<div class="row justify-content-center menu-item-wrapper">
				<div class="col-12">
					<span class="menu-icon">
						<img src="<?= base_url('assets/img/man.png') ?>">
					</span>
					<a href="<?= base_url('bacaan_sholat/'.$token) ?>" title="">
						<div class="menu-item">
							Bacaan Sholat
						</div>
					</a>
				</div>
			</div>
			<div class="row justify-content-center menu-item-wrapper">
				<div class="col-12">
					<span class="menu-icon">
						<img src="<?= base_url('assets/img/women.png') ?>">
					</span>
					<a href="<?= base_url('setelah_sholat/'.$token) ?>" title="">
						<div class="menu-item">
							Doa Setelah Sholat
						</div>
					</a>
				</div>
			</div>
			<div class="row justify-content-center menu-item-wrapper">
				<div class="col-12">
					<span class="menu-icon">
						<img src="<?= base_url('assets/img/marble_cream.png') ?>">
					</span>
					<a href="<?= base_url('dzikir_pilihan/'.$token) ?>" title="">
						<div class="menu-item">
							Dzikir Pilihan
						</div>
					</a>
				</div>
			</div>
			<div class="row justify-content-center menu-item-wrapper">
				<div class="col-12">
					<span class="menu-icon">
						<img src="<?= base_url('assets/img/holy_cream.png') ?>">
					</span>
					<a href="<?= base_url('juz_amma/'.$token) ?>" title="">
						<div class="menu-item">
							Juz Amma
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="footer-wrapper">
			<div class="row">
				<div class="col-6 brand-footer">
					<div>alsujud.com</div>
				</div>
				<div class="col-6 compass-icon">
					<a href="<?= base_url('kiblat/'.$token) ?>" title="">
						<span><img src="<?= base_url('assets/img/compass.png') ?>"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		setTimeout(() => {
			$('.splash').fadeOut(500, () => {
				$('.content').fadeIn(0);
			});
		}, 1000)
	});
</script>
</html>