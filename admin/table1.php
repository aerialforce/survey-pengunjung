<!DOCTYPE html>
<?php
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:../index.php');
}
include"../db/koneksi.php";
$floor=$_GET['floor'];
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
 	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
 	          <li class="nav-item active"><a href="data.php" class="nav-link">Data</a></li>
              <li class="nav-item"><a href="question.php" class="nav-link">Question</a></li>
 	          <li class="nav-item"><a href="account.php" class="nav-link">Account</a></li>

 	            <li class="nav-item cta"><a onclick="return confirm('Yakin akan keluar?')" href="../db/logout.php" class="nav-link" data-target="#modalRequest"><span>logout</span></a></li>
 	        </ul>
 	      </div>
 	    </div>
 	  </nav>
    <!-- END nav -->
    <section class="ftco-section ftco-section-2" >

      <div class="container">
        <div class="row">

        </div>
      </div>
    </section>
    <div class="row justify-content-center mb-5 pb-5">
<div class="col-md-7 text-center heading-section ftco-animate">
<center>
		<a target="_blank" href="excel/table1count.php?floor=<?php echo $floor?>">DOWNLOAD EXCEL</a>
	</center>
  <h2 align="center"><strong>Data Survey Lantai <?php echo $floor?></strong></h2><br />
    <form action="table1s.php?floor=<?php echo $floor?>" method="post">
        <!-- <p align="center"><font color="blue" size="3"><b>Tampilkan Data Berdasarkan Periode Tanggal</b></font></p><br /> -->
        <table border="0" align="center">
            <tr>
                <td width="250"><b>Dari Tanggal</b></td>
                <td width="250">: <input type="date" name="awal" size="16" required/>

                </td>
                <td width="250"><b>Sampai Tanggal</b></td>
                <td width="250">: <input type="date" name="akhir" size="16" required />
                </td>
                <td width="125"><input type="submit" value="Cari" name="pencarian"/></td>
                <td width="125"><input type="reset" value="Reset" /></td>
            </tr>
        </table>
    </form>






    <table class="zebra-table" width="1100" border="1">
    	<thead class="huruf">
    	<tr>
    		<td width="700"align="center"><b><strong>Pertanyaan</strong></b></td>
    		<td width="100"align="center"><b><strong>tidak puas</strong></b></td>
    		<td width="100"align="center"><b><strong>kurang puas</strong></b></td>
    		<!-- <td width="100"align="center"><b><strong>cukup</strong></b></td> -->
    		<td width="100"align="center"><b><strong>puas</strong></b></td>
    		<td width="100"align="center"><b><strong>sangat puas</strong></b></td>
    	</tr>
    	</thead>


    	<tbody class="huruf">

    	<tr>
    		<td width="700"><?php
        $sql ="SELECT text from question where id_text='$floor+a'";
        $query = mysqli_query($con,$sql);
        $buff=mysqli_fetch_array($query);
        echo $buff ['text'];?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='tidak puas' && floor='$floor'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='kurang puas' && floor='$floor'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>

    		<td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='puas' && floor='$floor'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='sangat puas' && floor='$floor'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    	</tr>
      <tr>
    		<td width="700"><?php
        $sql ="SELECT * from question where id_text='$floor+b'";
        $query = mysqli_query($con,$sql);
        $buff=mysqli_fetch_array($query);
        echo $buff ['text'];?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='tidak puas' && floor='$floor'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='kurang puas' && floor='$floor'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>

    		<td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='puas' && floor='$floor'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='sangat puas' && floor='$floor'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    	</tr>
    	</tbody>
    </table>
  <br />

  <h2 align="center"><strong>Kritik & Saran - Lantai <?php echo $floor?></strong></h2><br />
  <table class="zebra-table" width="1100" border="1">
    <thead class="huruf">
    <tr>
      <td width="30"align="center"><b><strong>id</strong></b></td>
      <td width="170"align="center"><b><strong>tanggal</strong></b></td>
      <td width="100"align="center"><b><strong>question1</strong></b></td>
      <!-- <td width="100"align="center"><b><strong>cukup</strong></b></td> -->
      <td width="100"align="center"><b><strong>question2</strong></b></td>
      <td width="700"align="center"><b><strong>Kritik & Saran</strong></b></td>
    </tr>
    </thead>


    <tbody class="huruf">
      <?php
      $pilih="select * from data where floor='$floor' && saran!=''";
      $hasil=mysqli_query($con,$pilih);
while($buff=mysqli_fetch_array($hasil)){
      ?>
    <tr>
    		<td width="30"><?php echo $buff ['id_data'];?></td>
    		<td width="170"><?php echo $buff ['time'];?></td>
    		<td width="100"><?php echo $buff ['q1'];?></td>
        <td width="100"><?php echo $buff ['q2'];?></td>
        <td width="700"><?php echo $buff ['saran'];?></td>
    </tr>
    <?php
    };
    mysqli_close($con);
    ?>
    </tbody>
  </table>
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
