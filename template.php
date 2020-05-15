<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>The Heart Saver</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Monitoring Denyut Nadi, Posisi Pasien" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
	<script src="https://kit.fontawesome.com/dd238ac0b8.js" crossorigin="anonymous"></script>
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
	
</head>

<body>
        <!-- mian-content -->
        <div class="main-w3layouts-header-sec">

            <!-- header -->
            <header>
                <div class="container">
                    <div class="header d-lg-flex justify-content-between align-items-center">
                        <div class="header-section">
                            <h1>
                                <a class="navbar-brand logo editContent" href="index.html">
                                    <span class="fas fa-heartbeat" ></span> Saver
                                </a>
                            </h1>
                        </div>
                        <div class="nav_section">
                            <nav>
                                <label for="drop" class="toggle mt-lg-0 mt-1"><span class="fas fa-bars" aria-hidden="true"></span></label>
                                <input type="checkbox" id="drop" />
                                <ul class="menu">
                                    <li class="active"><a href="#">Monitoring </a></li>
                                    <li><a href="#">Log Aktivitas </a></li>

                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </header>
            <!-- //header -->
            <!-- banner -->
            <section class="banner_w3pvt" id="home">
                <div class="csslider infinity" id="slider1">
                    <input type="radio" name="slides" checked="checked" id="slides_1" />
                    <ul>
                        <li>
                            <div class="banner-top">
                                <div class="overlay">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- //banner -->



        </div>
        <!-- //header -->
        <section class="banner-bottom py-5">
            <div class="container py-md-5">
                <div class="row mt-lg-5 text-center" id="stats">

                    <div class="col-lg-4 counter editContent mt-3">
							<button class="accordion">Nama : Fajar Adi</button>
							<div class="panel">
							  <p>Usia : 45 Thn.</p>
							</div>
                    </div>
                    <div class="col-lg-4 counter two editContent mt-3">
						<p>Denyut Nadi</p>
                        <img src="images/Denyutnadi.png" width="30%" id="gmbrJantung">
                        <div class="counter-info">
                            <h4>71 BPM</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 counter editContent mt-3">
						<p>Keberadaan Pasien</p>
                        <span class="fa fa-layer-group" size="30%"></span>
                        <div class="counter-info">
                            <h4>Lantai 2</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- //last-content -->
        <!-- //lab-test -->
        <div class="cpy-right py-3">
            <div class="container">
                <div class="row">
                    <p class="col-md-10 text-left">© 2020 Kronous. All rights reserved | Design by
                        <a href="http://w3layouts.com"> W3layouts.</a>
                    </p>
                    <!-- move top icon -->
                    <a href="#home" class="move-top text-lg-right text-center col-md-2"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
                    <!-- //move top icon -->
                </div>
            </div>

        </div>


    </div>
	<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>

</html>
