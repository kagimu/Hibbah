<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name')}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- all css here -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- bxslider css -->
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" href="css/flaticon.css">
		<!-- style css -->
		<link rel="stylesheet" href="css/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src='js/google_analytics_auto.js'></script>
        <style>
            // Insperation: https://dribbble.com/shots/1962035-Freebie-Music-Player-Dark-Version

body {
   background-color: #EDEDED;
}

$player-height: 190px;
$player-width: 430px;

h1 {
   font-family: 'Open Sans', sans-serif;
   font-size: 13pt;
   font-weight: 600;
   text-transform: uppercase;
   color: white;
   cursor: default;
}

h4 {
   font-family: 'Open Sans', sans-serif;
   font-size: 8pt;
   font-weight: 400;
   cursor: default;
}

h2 {
   font-family: 'Open Sans', sans-serif;
   font-size: 13pt;
   font-weight: 300;
   color: white;
   cursor: default;
}

@mixin unselectable() {
   -webkit-touch-callout: none;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
}

.player {
   height: $player-height;
   width: $player-width;
   background-color: #1E2125;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   -webkit-transform: translate(-50%, -50%);

   ul {
      list-style: none;
      li {
         display: inline-block;
      }
   }
}

.cover {
   position: absolute;
   top: 0;
   left: 0;
   img {
      height: $player-height;
      width: $player-height;
   }
}

.info {

   h1 {
      margin-top: 15px;
      margin-left: 180px;
      line-height: 0;
   }

   h4 {
      margin-left: 180px;
      line-height: 20px;
      color: #636367;
   }

   h2 {
      margin-left: 180px;
   }
}

.button-items {
   margin-left: 180px;
}

#slider {
	width: 182px;
	height: 4px;
	background: #151518;
   border-radius: 2px;
   div {
      width: 4px;
      height: 4px;
      margin-top: 1px;
      background: #EF6DBC;
      border-radius: 2px;
   }
}

#timer {
   color: #494B4E;
   line-height: 0;
   font-size: 9pt;
   float: right;
   font-family: Arial, Sans-Serif;
}

.controls {
   margin-top: 20px;

   svg:nth-child(2) {
      margin-left: 5px;
      margin-right: 5px;
   }
}

#play {
   padding: 0 3px;
   width: 30px;
   height: 30px;
   x: 0px;
   y: 0px;
   enable-background: new 0 0 25 25;

   g {
      stroke: #FEFEFE;
      stroke-width: 1;
      stroke-miterlimit: 10;

      path {
         fill: #FEFEFE;
      }
   }
}

#play:hover {
   cursor: pointer;
   g {
      stroke: #8F4DA9;
      cursor: pointer;

      path {
         fill: #9b59b6;
         cursor: pointer;
      }
   }
}

.step-backward {
   width: 18px;
   height: 18px;
   x: 0px;
   y: 0px;
   enable-background: new 0 0 25 25;
   margin-bottom: 5px;

   g polygon {
      fill: #FEFEFE;
   }
}

.step-foreward {
   width: 18px;
   height: 18px;
   x: 0px;
   y: 0px;
   enable-background: new 0 0 25 25;
   margin-bottom: 5px;

   g polygon {
      fill: #FEFEFE;
   }
}

#pause {
   x: 0px;
   y: 0px;
   enable-background: new 0 0 25 25;
   width: 30px;
   height: 30px;
   position: absolute;
   margin-left: -38px;
   cursor: pointer;

   rect {
      fill: white;
   }
}

#pause:hover rect {
   fill: #8F4DA9;
}

.step-backward g polygon:hover, .step-foreward g polygon:hover {
   fill: #EF6DBC;
   cursor: pointer;
}

.social {
   text-align: center;
}

.twitter {
  color: #BDBDBD;
  font-family: sans-serif;
  text-decoration: none;
  
  &:hover {
    color: #ecf0f1;
  }
}

.github {
  color: #BDBDBD;
  font-family: sans-serif;
  text-decoration: none;
  
  &:hover {
    color: #ecf0f1;
  }
}

p {
  color: #BDBDBD;
}

#skip {
  float: right;
  margin-top: 10px;
  
  p {
    color: #2980b9;
  }
  
  p:hover {
    color: #e74c3c;
    cursor: pointer;
  }
}

.expend {
   padding: 0.5px;
   cursor: pointer;
   
   svg:hover g polygon {
      fill: #EF6DBC;
   }
}
 </style>
    </head>
   <body>
    <header>
        <div class="topbar hidden-sm-down">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                        <div class="header-social text-right">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header hidden-sm-down" id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="/"><img src="images/logo/logo.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="menu-area">
                            <nav>
                                <ul class="list-inline">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/articles">Lyrics</a></li>
                                    <li><a href="/news">News</a></li>
                                    <li><a href="/audios">Audios</a></li>
                                    <li><a href="/artists">Artists</a></li>
                                    <li><a href="/sermons">Sermons</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li class="menu-btn"><span class="search-ico"><i class="flaticon-magnifying-glass" style="top: 6em"></i></span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="search-box">
                            <form>
                                <input type="search" placeholder="">
                                <button><i class="flaticon-magnifying-glass"></i></button>
                                <span class="close-search"><i class="flaticon-cancel"></i></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


       @yield('content')


    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- tether js -->
    <script src="js/tether.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- bxslider js -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- magnific popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jarallax js -->
    <script src="js/jarallax.min.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- downCount JS -->
    <script src="js/jquery.downCount.js"></script>
    <!-- counterup JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- mixitup js -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
    <script>
        function previewFile(input){
             var file=$("input[type=file]").get(0).files[0];
             if(file)
             {
                 var reader = new FileReader();
                 reader.onload = function(){
                     $('#previewImg').attr("src",reader.result);
                 }
                 reader.readAsDataURL(file);
             }
        }

        var music = document.getElementById("music");
var playButton = document.getElementById("play");
var pauseButton = document.getElementById("pause");
var playhead = document.getElementById("elapsed");
var timeline = document.getElementById("slider");
var timer = document.getElementById("timer");
var duration;
pauseButton.style.visibility = "hidden";

var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;
music.addEventListener("timeupdate", timeUpdate, false);

function timeUpdate() {
	var playPercent = timelineWidth * (music.currentTime / duration);
	playhead.style.width = playPercent + "px";

	var secondsIn = Math.floor(((music.currentTime / duration) / 3.5) * 100);
	if (secondsIn <= 9) {
		timer.innerHTML = "0:0" + secondsIn;
	} else {
		timer.innerHTML = "0:" + secondsIn;
	}
}

playButton.onclick = function() {
	music.play();
	playButton.style.visibility = "hidden";
	pause.style.visibility = "visible";
}

pauseButton.onclick = function() {
	music.pause();
	playButton.style.visibility = "visible";
	pause.style.visibility = "hidden";
}

music.addEventListener("canplaythrough", function () {
	duration = music.duration;
}, false);
    </script>
    
   </body>
</html>
