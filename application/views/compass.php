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
		padding: 1em 0em;
		margin: 0.5em 6em;
	}
	#back{
		width: 1em;
	}
	.compass {
    position: relative;
    width: 20em;
    height: 20em;
    border-radius: 50%;
    margin: auto;
  }

  .compass > .arrow {
    position: absolute;
    width: 0;
    height: 0;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    border-style: solid;
    border-width: 30px 20px 0 20px;
    border-color: red transparent transparent transparent;
    z-index: 1;
  }

  .compass > .compass-circle,
  .compass > .my-point {
    position: absolute;
    width: 90%;
    height: 90%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: transform 0.1s ease-out;
    background: url(<?= base_url('assets/img/compass.png') ?>)
      center no-repeat;
    background-size: contain;
  }

  .compass > .my-point {
    opacity: 0;
    width: 20%;
    height: 20%;
    background: rgb(8, 223, 69);
    border-radius: 50%;
    transition: opacity 0.5s ease-out;
  }

  .start-btn {
    text-align: center;
    background-color: #e2e797;
    border-radius: 0.5em;
    padding: 0.5em 1em;
  }

  .compass-wrapper{
    margin-top: 5em;
  }

  #compass-btn-wrapper{
    text-align: center;
    margin-top: 1em;
  }
</style>
<body>
	<div class="row">
		<div class="col-12">
			<a href="<?= base_url($token) ?>" title="">
       <img src="<?= base_url('assets/img/back.png') ?>" id="back" alt="">
      </a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="compass compass-wrapper">
		    	<!-- <div class="arrow"></div> -->
		    	<div class="compass-circle"></div>
		    	<div class="my-point"></div>
		    </div>
		    <div class="row">
          <div class="col-12" id="compass-btn-wrapper">
            <button class="start-btn">Cari Kiblat</button>
          </div>
        </div>
		</div>
	</div>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script>
    const compassCircle = document.querySelector(".compass-circle");
    const myPoint = document.querySelector(".my-point");
    const startBtn = document.querySelector(".start-btn");
    const isIOS =
      navigator.userAgent.match(/(iPod|iPhone|iPad)/) &&
      navigator.userAgent.match(/AppleWebKit/);

    function init() {
      startBtn.addEventListener("click", startCompass);
      navigator.geolocation.getCurrentPosition(locationHandler);

      if (!isIOS) {
        window.addEventListener("deviceorientationabsolute", handler, true);
      }
    }

    function startCompass() {
      if (isIOS) {
        DeviceOrientationEvent.requestPermission()
          .then((response) => {
            if (response === "granted") {
              window.addEventListener("deviceorientation", handler, true);
            } else {
              alert("has to be allowed!");
            }
          })
          .catch(() => alert("not supported"));
      }
    }

    function handler(e) {
      compass = e.webkitCompassHeading || Math.abs(e.alpha - 360);
      compassCircle.style.transform = `translate(-50%, -50%) rotate(${-compass}deg)`;

      // ±15 degree
      if (
        (pointDegree < Math.abs(compass) &&
          pointDegree + 15 > Math.abs(compass)) ||
        pointDegree > Math.abs(compass + 15) ||
        pointDegree < Math.abs(compass)
      ) {
        myPoint.style.opacity = 0;
      } else if (pointDegree) {
        myPoint.style.opacity = 1;
      }
    }

    let pointDegree;

    function locationHandler(position) {
      const { latitude, longitude } = position.coords;
      pointDegree = calcDegreeToPoint(latitude, longitude);

      if (pointDegree < 0) {
        pointDegree = pointDegree + 360;
      }
    }

    function calcDegreeToPoint(latitude, longitude) {
      // Qibla geolocation
      const point = {
        lat: 21.422487,
        lng: 39.826206
      };

      const phiK = (point.lat * Math.PI) / 180.0;
      const lambdaK = (point.lng * Math.PI) / 180.0;
      const phi = (latitude * Math.PI) / 180.0;
      const lambda = (longitude * Math.PI) / 180.0;
      const psi =
        (180.0 / Math.PI) *
        Math.atan2(
          Math.sin(lambdaK - lambda),
          Math.cos(phi) * Math.tan(phiK) -
            Math.sin(phi) * Math.cos(lambdaK - lambda)
        );
      return Math.round(psi);
    }

    init();
  </script>
</html>