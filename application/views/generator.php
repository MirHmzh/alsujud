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
	.content-wrapper{
		margin: 0em 2em;
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
	.navbar{
		position: sticky;
		top: 0;
	}
	#play{
		float: right;
	}
	.ayat-wrapper{
		color: #e2e797;
		margin: 0em 2em 1.5em 2em;
		border-bottom: 2px solid #e2e797;
	}
	.bismillah-wrapper .ayat-wrapper{
		border: none;
	}
	.ayat{
		text-align: right;
		font-size: 1.5em;
		font-weight: 200;
	}
	.arti{
		margin-top: 0.1em;
		font-size: 1em;
		font-weight: 200;
	}
	.nama-surat{
		font-size: 1.5em;
		font-weight: 900;
	}
	.turun-surat, .jml-ayat{
		font-size: 1em;
		font-weight: 400;
	}
	.bismillah{
		text-align: center;
		font-weight: 200;
		font-size: 1.5em;
	}
	.ayat-number{
		border: 2px solid #e2e797;
		border-radius: 100%;
		width: 1.5em;
		height: 1.5em;
		display: inline-block;
		text-align: center;
		float: left;
	}
	#teks-url, #teks-enkripsi{
		background-color: #e2e797;
		border-radius: 0.1em;
		padding: 0.2em;
		color: #313e28;
		font-size: 0.4em;
		width: 100%;
	}
	#generate-qr, #generate-enkripsi{
		background-color: #e2e797;
		color: #313e28;
		border: none;
	}
	#hasil-enkripsi{
		color: #e2e797;
		font-size: 0.5em;
	}
</style>
<body>
	<!-- <div class="row navbar">
		<div class="col-6">
			<a href="<?= base_url('juz_amma') ?>" title="">
				<img src="<?= base_url('assets/img/back.png') ?>" id="back" style="width: 1em" alt="">
			</a>
		</div>
		<div class="col-6">
			<span id="pause" style="display: none;">
				<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">
			</span>
			<span id="play">
				<img src="<?= base_url('assets/img/volume.png') ?>" style="width: 1em;" alt="">
			</span>
		</div>
	</div> -->
	<div class="content-wrapper">
		<br><br>
		<div class="row justify-content-center">
			<input type="text" value="2020-alsujud/1006-001" id="teks-enkripsi" class="form-control" placeholder="Masukkan Kode Unik">
		</div>
		<br>
		<div class="row justify-content-center">
			<button type="button" id="generate-enkripsi" class="btn btn-info">Enkripsi</button>
		</div>
		<br>
		<div class="row justify-content-center" id="hasil-enkripsi">
			Enkripsi :&nbsp;<span id="enkripsi"></span>
		</div>
		<br><br>
		<div class="row justify-content-center">
			<textarea id="teks-url" rows="3" placeholder="Masukkan URL"></textarea>
		</div>
		<br>
		<div class="row justify-content-center">
			<button type="button" id="generate-qr" class="btn btn-info">Generate QR</button>
		</div>
		<br>
		<div class="row justify-content-center">
			<canvas id="canvas" style="display: none;"></canvas>
			<img src="" id="qrcode" alt="">
		</div>
	</div>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/qrcode.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$('#generate-qr').click(() => {
		$('#qrcode').html('');
		$('#teks-url').text('<?= base_url() ?>');
		let qrcode = new QrCodeWithLogo({
	        canvas: document.getElementById("canvas"),
	        content: $('#teks-url').val(),
	        width: 380,
	        // download: true,
	        image: document.getElementById("qrcode"),
	        logo: {
	          src: "<?= base_url('assets/img/logo_qr.jpg') ?>"
	        }
	      });

			qrcode.toCanvas().then(() => {
	        qrcode.toImage().then(() => {
	          setTimeout(() => {
	            qrcode.downloadImage($('#teks-enkripsi').val());
	          }, 2000);
	        });
	      });
	});

	$('#generate-enkripsi').click(() => {
		let url = btoa($('#teks-enkripsi').val());
		$('#enkripsi').html('').html(url);
		$('#teks-url').text('<?= base_url() ?>'+url);
	});
</script>
</html>