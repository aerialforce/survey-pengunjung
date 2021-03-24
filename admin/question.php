<!DOCTYPE html>
<?php
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:../index.php');
}
include"../db/koneksi.php";

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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
   	          <li class="nav-item"><a href="data.php" class="nav-link">Data</a></li>
              <li class="nav-item active"><a href="question.php" class="nav-link">Question</a></li>
   	          <li class="nav-item"><a href="account.php" class="nav-link">Account</a></li>
              <li class="nav-item cta"><a onclick="return confirm('Yakin akan keluar?')" href="../db/logout.php" class="nav-link" data-target="modalRequest"><span>logout</span></a></li>
              </ul>
          </div>
        </div>
      </nav>
      <section class="ftco-section ftco-work">
        <div class="container-fluid">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <h1 class="mb-4">Edit Survey Question</h1>
              <span class="subheading">Satisfaction Survey System</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="que.php?floor=1" class="img" style="background-image: url(../images/work-1.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <h3>Lantai 1</h3>
                      <span>1. <?php
                      $sql ="SELECT text from question where id_text='1+a'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span><br />
                      <span>2. <?php
                      $sql ="SELECT text from question where id_text='1+b'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="que.php?floor=2" class="img" style="background-image: url(../images/work-2.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <h3>Lantai 2</h3>
                      <span>1. <?php
                      $sql ="SELECT text from question where id_text='2+a'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span><br />
                      <span>2. <?php
                      $sql ="SELECT text from question where id_text='2+b'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="que.php?floor=3" class="img" style="background-image: url(../images/work-3.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <h3>Lantai 3</h3>
                      <span>1. <?php
                      $sql ="SELECT text from question where id_text='3+a'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span><br />
                      <span>2. <?php
                      $sql ="SELECT text from question where id_text='3+b'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="que.php?floor=4" class="img" style="background-image: url(../images/work-4.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <h3>Lantai 4</h3>
                      <span>1. <?php
                      $sql ="SELECT text from question where id_text='4+a'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span><br />
                      <span>2. <?php
                      $sql ="SELECT text from question where id_text='4+b'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="que.php?floor=5" class="img" style="background-image: url(../images/work-5.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <h3>Lantai 5</h3>
                      <span>1. <?php
                      $sql ="SELECT text from question where id_text='5+a'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span><br />
                      <span>2. <?php
                      $sql ="SELECT text from question where id_text='5+b'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="que.php?floor=6" class="img" style="background-image: url(../images/work-6.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <h3>Lantai 6</h3>
                      <span>1. <?php
                      $sql ="SELECT text from question where id_text='6+a'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span><br />
                      <span>2. <?php
                      $sql ="SELECT text from question where id_text='6+b'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="work-entry">
                <a href="que.php?floor=7" class="img" style="background-image: url(../images/work-2.jpg);">
                  <div class="text d-flex justify-content-center align-items-center">
                    <div class="p-3">
                      <h3>Lantai 7</h3>
                      <span>1. <?php
                      $sql ="SELECT text from question where id_text='7+a'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span><br />
                      <span>2. <?php
                      $sql ="SELECT text from question where id_text='7+b'";
                      $query = mysqli_query($con,$sql);
                      $buff=mysqli_fetch_array($query);
                      echo $buff ['text'];?></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
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
