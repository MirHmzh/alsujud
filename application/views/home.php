<!DOCTYPE html>
<html>
<head>
	<title>AlSujud</title>
</head>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<style type="text/css">
	@font-face {
	  font-family: Lora;
	  src: url(<?= base_url('assets/font/') ?>Lora.ttf);
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
		padding: 1em 0em;
		margin: 0.5em 3em;
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
		/*display: none;*/
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
		position: fixed;
		width: 101%;
		left: -0.5%;
		border-radius: 11% 11% 10% 10% / 11% 11% 0% 0%;
		padding: 4em 0em;
		/*display: none;*/
	}
	.menu-icon{
		background-color: #313e28;
		position: fixed;
		padding: 0.8em 0.6em;
		margin-top: -0.5em;
		left: 10%;
		border-radius: 0.3em;
	}
	.menu-icon img{
		width: 2em;
	}
	.flower-wrapper{
		opacity: 23%;
		height: 3vh;
	}
	.flower-wrapper div img{
		width: 30%;
	}
	.flower-right{
		transform: rotate(180deg);
		position: fixed;
		right: 10%;
	}
	.flower-left{
		transform: rotateX(180deg);
		position: fixed;
		left: 10%;
	}
	.menu-item-wrapper{
		margin-top: 1em;
	}
	.footer-wrapper{
		margin-top: 65vh;
		padding: 1.9em 0em 0.3em 0em;
		background-color: #fff;
	}
	.brand-footer span{
		position: fixed;
		bottom: 2em;
	}
	.compass-icon{
		text-align: right;
	}
	.compass-icon img{
		width: 30%;
	}
</style>
<body>
	<!-- <div class="splash">
		<div class="brand">
			<img src="<?= base_url('assets/img/logo.png') ?>">
		</div>
		<div class="brand-splash">
			alsujud.com
		</div>
	</div> -->
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
		<div class="flower-wrapper">
			<div class="flower-left">
				<img src="<?= base_url('assets/img/flower.png') ?>" alt="">
			</div>
			<div class="flower-right">
				<img src="<?= base_url('assets/img/flower.png') ?>" alt="">
			</div>
			<div class="clear"></div>
		</div>
		<div class="menu-wrapper">
			<div class="row justify-content-center menu-item-wrapper">
				<div class="col-12">
					<div class="menu-icon">
						<img src="<?= base_url('assets/img/man.png') ?>">
					</div>
					<a href="<?= base_url('bacaan_sholat/'.$token) ?>" title="">
						<div class="menu-item">
							Bacaan Sholat
						</div>
					</a>
				</div>
			</div>
			<div class="row justify-content-center menu-item-wrapper">
				<div class="col-12">
					<div class="menu-icon">
						<img src="<?= base_url('assets/img/women.png') ?>">
					</div>
					<a href="<?= base_url('setelah_sholat/'.$token) ?>" title="">
						<div class="menu-item">
							Doa Setelah Sholat
						</div>
					</a>
				</div>
			</div>
			<div class="row justify-content-center menu-item-wrapper">
				<div class="col-12">
					<div class="menu-icon">
						<img src="<?= base_url('assets/img/marble_cream.png') ?>">
					</div>
					<a href="<?= base_url('dzikir_pilihan/'.$token) ?>" title="">
						<div class="menu-item">
							Dzikir Pilihan
						</div>
					</a>
				</div>
			</div>
			<div class="row justify-content-center menu-item-wrapper">
				<div class="col-12">
					<div class="menu-icon">
						<img src="<?= base_url('assets/img/holy_cream.png') ?>">
					</div>
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
					<span>alsujud.com</span>
				</div>
				<div class="col-6 compass-icon">
					<span><img src="<?= base_url('assets/img/compass.png') ?>"></span>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	// $(document).ready(function() {
	// 	setTimeout(() => {
	// 		$('.splash').fadeOut(500, () => {
	// 			$('.content').fadeIn(0);
	// 		});
	// 	}, 1000)
	// });
</script>
</html>