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
			<a href="<?= base_url('main/juz_amma') ?>" title="">
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
	let play;
	let order;
	let html = '';
	let seek;
	let soundId;

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
			sound.unload();
			play = false;
		}
		else{
			$('#pause').show();
			$('#play').html('<img src="<?= base_url('assets/img/stop.png') ?>" style="width: 1em;" alt="">');
			$('#pause').html('<img src="<?= base_url('assets/img/pause.png') ?>" style="width: 1em;" alt="">');
			autoplay(0, audio);
		}
	});

	function autoplay(i, list) {
	    play = true;
	    order = i;
	    sound = new Howl({
	        src: [list[i]],
	        format: 'mp3',
	        preload: true,
	        onend: function () {
	            if ((i + 1) == list.length) {
	                play = false;
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