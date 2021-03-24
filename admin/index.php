<!DOCTYPE html>
<?php
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:../index.php');
}
include"../db/koneksi.php";

// $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='sangat baik' && floor='2'";
// $query = mysqli_query($con,$sql);
// $result = mysqli_fetch_array($query);
 ?>
<html lang="en">
  <head>
    <title>Pusat Perpustakaan - Visitors Satisfaction Survey</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">


    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style2.css">
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Pusat Perpustakaan</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="data.php" class="nav-link">Data</a></li>
             <li class="nav-item"><a href="question.php" class="nav-link">Question</a></li>
	          <li class="nav-item"><a href="account.php" class="nav-link">Account</a></li>

	            <li class="nav-item cta"><a onclick="return confirm('Yakin akan keluar?')" href="../db/logout.php" class="nav-link" data-target="#modalRequest"><span>logout</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap">
      <div class="overlay"></div>
      <div class="container-fluid">
        <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

          <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4"> Satisfaction Survey
              <strong class="typewrite" data-period="4000" data-type='[ "System", "Pusat Perpustakaan", "UIN Jakarta"]'>
                <span class="wrap"></span>
              </strong>
            </h1>
            <p class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Aplikasi ini berguna untuk menampung dan mengolah data kepuasan pengunjung Pusat Perpustakaan UIN Syarif Hidayatullah Jakarta.</p>
            <!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Get a Quote</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Our Portfolio</a></p> -->
          </div>
          <div class="one-half align-self-md-end align-self-sm-center">
            <div class="slider-carousel owl-carousel">
              <div class="item">
                <img src="../images/dashboard_full_1.png" class="img-fluid img"alt="">
              </div>
              <div class="item">
                <img src="../images/dashboard_full_2.png" class="img-fluid img"alt="">
              </div>
              <div class="item">
                <img src="../images/dashboard_full_3.png" class="img-fluid img"alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-section-2" >

      <div class="container">
        <div class="row">

        </div>
      </div>
    </section>
    <div class="container-fluid">
      <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 class="mb-2">Jumlah Data Survey</h2>
          <span class="subheading">Satisfaction Survey System</span>
        </div>
      </div>
  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-11">
          <div class="row">

            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="<?php
                  $sql = "SELECT COUNT(id_data) AS jumlah FROM `data` WHERE floor='1'";
                  $query = mysqli_query($con,$sql);
                  $result = mysqli_fetch_array($query);
                  echo "{$result['jumlah']}";?>">0</strong>
                  <span>Lantai 1</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="<?php
                  $sql = "SELECT COUNT(id_data) AS jumlah FROM `data` WHERE floor='2'";
                  $query = mysqli_query($con,$sql);
                  $result = mysqli_fetch_array($query);
                  echo "{$result['jumlah']}";?>">0</strong>
                  <span>Lantai 2</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="<?php
                  $sql = "SELECT COUNT(id_data) AS jumlah FROM `data` WHERE floor='3'";
                  $query = mysqli_query($con,$sql);
                  $result = mysqli_fetch_array($query);
                  echo "{$result['jumlah']}";?>">0</strong>
                  <span>Lantai 3</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="<?php
                  $sql = "SELECT COUNT(id_data) AS jumlah FROM `data` WHERE floor='4'";
                  $query = mysqli_query($con,$sql);
                  $result = mysqli_fetch_array($query);
                  echo "{$result['jumlah']}";?>">0</strong>
                  <span>Lantai 4</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="
                  <?php
                  $sql = "SELECT COUNT(id_data) AS jumlah FROM `data` WHERE floor='5'";
                  $query = mysqli_query($con,$sql);
                  $result = mysqli_fetch_array($query);
                  echo "{$result['jumlah']}";?>">0</strong>
                  <span>Lantai 5</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="
                  <?php
                  $sql = "SELECT COUNT(id_data) AS jumlah FROM `data` WHERE floor='6'";
                  $query = mysqli_query($con,$sql);
                  $result = mysqli_fetch_array($query);
                  echo "{$result['jumlah']}";?>">0</strong>
                  <span>Lantai 6</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="
                  <?php
                  $sql = "SELECT COUNT(id_data) AS jumlah FROM `data` WHERE floor='7'";
                  $query = mysqli_query($con,$sql);
                  $result = mysqli_fetch_array($query);
                  echo "{$result['jumlah']}";?>">0</strong>
                  <span>Lantai 7</span>
                </div>
              </div>
            </div>
</div>
</div>
</div>
</div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/mainoperator.js"></script>

  </body>
</html>
