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
	.navbar{
		position: sticky;
		top: 0;
	}
	#play{
		text-align: right;
	}
	.ayat-wrapper{
		color: #e2e797;
		margin: 2em 2em 2em 2em;
	}
	.ayat{
		text-align: right;
		font-size: 1.5em;
		font-weight: 200;
	}
	#play{
		float: right;
	}
	.arti{
		margin-top: 2em;
		font-size: 1em;
		font-weight: 200;
	}
</style>
<body>
	<div class="row navbar">
		<div class="col-6">
			<a href="<?= base_url('dzikir_pilihan/'.$token) ?>" title="">
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
	</div>
	<div class="content-wrapper">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="menu-item">
					<?= $judul ?>
				</div>
			</div>
		</div>
		<div class="ayat-wrapper">
			<div class="row">
				<div class="col-12 ayat">
					<?= $lafadz ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12 arti">
					<?= $arti ?>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/howler.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8" async defer>
	let sound = new Howl({
	        src: ['<?= $sound ?>'],
	        format: 'mp3',
	        preload: true,
	        onend: () => {
	        	$('#pause').hide();
				$('#play').html('<img src="<?= base_url('assets/img/volume.png') ?>" style="width: 1em;" alt="">');
				play = false;
	        },
	    });
	let soundId;
	let seek;
	let play = false;
	$('#pause').click(() => {
		if (sound.playing()) {
			$('#pause').html('<img src="<?= base_url('assets/img/play.png') ?>" style="width: 1em;" alt="">');
	    	sound.pause();
			seek = sound.seek(soundId);
		}else{
			$('#pause').html('<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">');
			soundId = sound.play();
	    	sound.seek(seek, soundId);
		}
		// return sound.playing() ? sound.pause() : autoplay(order, audio);
	});
	$('#play').click(() => {
		if (play) {
			$('#pause').hide();
			$('#play').html('<img src="<?= base_url('assets/img/volume.png') ?>" style="width: 1em;" alt="">');
			sound.stop();
			play = false;
		}
		else{
			console.log(soundId);
			console.log(seek);
			console.log(play);
			soundId = sound.play();
			sound.seek(0, soundId);
			play = true;
			$('#pause').show();
			$('#play').html('<img src="<?= base_url('assets/img/stop.png') ?>" style="width: 1em;" alt="">');
			$('#pause').html('<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">');
		}
	});
</script>
</html>