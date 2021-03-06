<!DOCTYPE html>
<html>
<head>
	<title>AlSujud</title>
</head>
<link rel="icon" href="<?= base_url('assets/img/logo_qr.jpg') ?>" sizes="16x16">
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
	#next{
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
</style>
<body>
	<div class="row navbar">
		<div class="col-6">
			<a href="<?= base_url('juz_amma/'.$token) ?>" title="">
				<img src="<?= base_url('assets/img/back.png') ?>" id="back" style="width: 1em" alt="">
			</a>
		</div>
		<div class="col-6">
			<!-- <span id="pause" style="display: none;">
				<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">
			</span> -->
			<span id="play">
				<img src="<?= base_url('assets/img/play.png') ?>" style="width: 1em;" alt="">
			</span>
			<?php if ($surat > 79): ?>
				<a id="next" href="<?= base_url('detil_juz_amma/'.($surat+1)."/".$token) ?>" title="">
					<img src="<?= base_url('assets/img/next.png') ?>" id="back" style="width: 1em" alt="">
				</a>
			<?php else: ?>
				<a id="next" href="" title="">
					&nbsp;
				</a>
			<?php endif ?>
		</div>
	</div>
	<div class="content-wrapper">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="menu-item">
					<span class="nama-surat">
						&nbsp;
					</span>
					<span class="turun-surat">
						&nbsp;
					</span>
					<span class="jml-ayat">
						&nbsp;
					</span>
				</div>
			</div>
		</div>
		<br><br>
		<div class="bismillah-wrapper">
			<div class="ayat-wrapper">
				<div class="row">
					<div class="col-12 bismillah">
						بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
					</div>
				</div>
			</div>
		</div>
		<div class="surah-wrapper">

		</div>
	</div>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/howler.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	let audio = [];
	let format = [];
	let sound;
	let play = false;
	let order;
	let html = '';
	let seek;
	let soundId;
	let pause = false;
	let stopped = true;

	String.prototype.toIndiaDigits= function(){
	 var id= ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
	 return this.replace(/[0-9]/g, function(w){
	  return id[+w]
	 });
	}

	$.ajax({
		url: 'https://api.quran.sutanlab.id/surah/<?= $surat ?>',
		type: 'GET',
		dataType: 'json'
	})
	.done(function(data) {
		$(".nama-surat").html(data.data.name.transliteration.id);
		$(".jml-ayat").html(data.data.numberOfVerses+" ayat");
		$(".turun-surat").html(" : "+data.data.revelation.id+" | ");
		audio.push(data.data.preBismillah.audio.primary);

		$.each(data.data.verses, function(index, val) {
			audio.push(val.audio.primary);
			format.push('mp3');
			let ayat_number = (index+1).toString();
			html += `
				<div class="ayat-wrapper">
					<div class="row">
						<div class="col-12 ayat">
							${val.text.arab} <span class="ayat-number">${ayat_number.toIndiaDigits()}</span>
						</div>
					</div>
					<div class="row">
						<div class="col-12 arti">
							${val.translation.id}
						</div>
					</div>
				</div>
			`;
			$(".surah-wrapper").html(html);
		});
		console.log('done');
	})
	.fail(function(e) {
		alert(e);
	})
	.always(function(e) {
		// alert(JSON.stringify(e));
	});
	// $('#pause').click(() => {
	// 	if (sound.playing()) {
	// 		$('#pause').html('<img src="<?= base_url('assets/img/play.png') ?>" style="width: 1em;" alt="">');
	//     	sound.pause();
	// 		seek = sound.seek(soundId);
	// 	}else{
	// 		$('#pause').html('<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">');
	// 		soundId = sound.play();
	//     	sound.seek(seek, soundId);
	// 	}
	// 	// return sound.playing() ? sound.pause() : autoplay(order, audio);
	// });
	$('#play').click(() => {
		if (stopped && pause == false) {
			$('#play').html('<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">');
			autoplay(0, audio);
			stopped = false;
			console.log('play');
			console.log('stopped '+stopped);
			console.log('pause '+stopped);
		}

		else if (pause == false && stopped == false) {
			$('#play').html('<img src="<?= base_url('assets/img/play.png') ?>" style="width: 1em;" alt="">');
			sound.pause();
			seek = sound.seek(soundId);
			pause = true;
			stopped = true;
			console.log('pause');
			console.log('stopped '+stopped);
			console.log('pause '+stopped);
		}

		else if (pause && stopped) {
			$('#play').html('<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">');
			soundId = sound.play();
		    sound.seek(seek, soundId);
		    stopped = false;
		    pause = false;
		    console.log('replay');
		    console.log('stopped '+stopped);
			console.log('pause '+stopped);
		}


		// if (play) {
		// 	// $('#pause').hide();
		// 	console.log('pause');
		// 	$('#play').html('<img src="<?= base_url('assets/img/play.png') ?>" style="width: 1em;" alt="">');
		// 	// sound.unload();
		// 	sound.pause();
		// 	seek = sound.seek(soundId);
		// 	play = false;
		// 	pause = true;
		// }
		// else{
		// 	// $('#pause').show();
		// 	console.log('play');
		// 	$('#play').html('<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">');
		// 	// $('#pause').html('<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">');
		// 	// autoplay(0, audio);
		// 	if (pause) {
		// 		soundId = sound.play();
		//     	sound.seek(seek, soundId);
		//     	pause = true;
		//     	play = false;
		//     	console.log('play 2');
		// 	}else{
		// 		autoplay(0, audio);
		// 		pause = true;
		// 		play = false;
		// 		console.log('play 3');
		// 	}
		// }
		// if (play) {
		// 	$('#pause').html('<img src="<?= base_url('assets/img/play.png') ?>" style="width: 1em;" alt="">');
	 //    	sound.pause();
		// 	seek = sound.seek(soundId);
		// }else{
		// 	$('#pause').html('<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">');
		// 	soundId = sound.play();
	 //    	sound.seek(seek, soundId);
		// }
	});

	function autoplay(i, list) {
	    play = true;
	    pause = false;
	    order = i;
	    sound = new Howl({
	        src: [list[i]],
	        format: 'mp3',
	        preload: true,
	        onend: function () {
	            if ((i + 1) == list.length) {
	                play = false;
	                $('#pause').hide();
					$('#play').html('<img src="<?= base_url('assets/img/play.png') ?>" style="width: 1em;" alt="">');
					play = false;
					stopped = true;
					paused = false;
	                return true;
	            } else {
	                autoplay(i + 1, list)
	            }
	        }
	    });
	    console.log(seek);
	    soundId = sound.play();
	    sound.seek(0, soundId);
	}


</script>
</html>