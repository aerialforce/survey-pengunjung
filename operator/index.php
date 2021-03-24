<!DOCTYPE html>
<?php
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='operator')){
  header ('location:../index.php');
}
 ?>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Pusat Perpustakaan - Visitors Satisfaction Survey</title>
     <link href="../style/userstyle.css" type="text/css" rel="stylesheet" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

     <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
     <link rel="stylesheet" href="css/animate.css">

     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <link rel="stylesheet" href="css/aos.css">

     <link rel="stylesheet" href="css/ionicons.min.css">

     <link rel="stylesheet" href="css/bootstrap-datepicker.css">
     <link rel="stylesheet" href="css/jquery.timepicker.css">


     <link rel="stylesheet" href="css/flaticon.css">
     <link rel="stylesheet" href="css/icomoon.css">
     <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">Pusat Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <!-- <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
              <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="work.html">Work</a></li>
              <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
              <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
              <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
              <li class="nav-item cta"><a onclick="return confirm('Yakin akan keluar?')" href="../db/logout.php" class="nav-link" data-target="modalRequest"><span>logout</span></a></li>
              </ul>
          </div>
        </div>
      </nav>
      <section class="ftco-section ftco-work">
        <div class="container-fluid">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <h1 class="mb-4">Visitors Satisfaction Survey</h1>
              <span class="subheading">We're Happy to hear your suggestion</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="lantai1.php" class="img" style="background-image: url(images/work-1.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <span>Lobby</span>
                      <h3>Lantai 01</h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="lantai2.php" class="img" style="background-image: url(images/work-2.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <span>Locker Room</span>
                      <h3>Lantai 02</h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="lantai3.php" class="img" style="background-image: url(images/work-3.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <span>Administrasi</span>
                      <h3>Lantai 03</h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="lantai4.php" class="img" style="background-image: url(images/work-4.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <span>Sirkulasi</span>
                      <h3>Lantai 04</h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="lantai5.php" class="img" style="background-image: url(images/work-5.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <span>Otomasi</span>
                      <h3>Lantai 05</h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="lantai6.php" class="img" style="background-image: url(images/work-6.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <span>Koleksi Skripsi</span>
                      <h3>Lantai 06</h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/jquery.timepicker.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="js/google-map.js"></script>
      <script src="js/main.js"></script>

   </body>
</html>
