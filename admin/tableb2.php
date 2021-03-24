<!DOCTYPE html>
<?php
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:../index.php');
}
include"../db/koneksi.php";
include"../db/counter.php";
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


    <h2 align="center"><strong>Data Survey Lantai 1</strong></h2><br />

    <?php

    include"../db/koneksi.php";
    $select="select * from question";
    $hasil=mysqli_query($con,$select);

    ?>

    <table class="zebra-table">
    	<tr>
    		<td>

    		</td>
    	</tr>
    </table>


    <table class="zebra-table" width="800" border="1">
    	<thead class="huruf">
    	<tr>
    		<td width="300"align="center"><b><strong>Question Floor 1</strong></b></td>
    		<td width="100"align="center"><b><strong>sangat buruk</strong></b></td>
    		<td width="100"align="center"><b><strong>buruk</strong></b></td>
    		<!-- <td width="100"align="center"><b><strong>cukup</strong></b></td> -->
    		<td width="100"align="center"><b><strong>baik</strong></b></td>
    		<td width="100"align="center"><b><strong>sangat baik</strong></b></td>
    	</tr>
    	</thead>


    	<tbody class="huruf">

    	<tr>
    		<td width="300">question</td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='stb' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='tidak baik' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>

    		<td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='baik' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='sangat baik' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    	</tr>
      <tr>
    		<td width="300">question2</td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='stb' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='tidak baik' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>

    		<td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='baik' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='sangat baik' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    	</tr>
      <tr>
    		<td width="300">question3</td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='stb' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='tidak baik' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>

    		<td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='baik' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    		<td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='sangat baik' && floor='1'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
    	</tr>
      <tr>
    		<td width="300"align="center"><b>Question Floor 2</b></td>
    		<td width="100"align="center"><b>sangat buruk</b></td>
    		<td width="100"align="center"><b>buruk</b></td>
    		<td width="100"align="center"><b>cukup</b></td>
    		<td width="100"align="center"><b>baik</b></td>
    		<td width="100"align="center"><b>sangat baik</b></td>
    	</tr>
      <tr>
        <td width="300">question1</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='stb' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='tidak baik' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='biasa' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='baik' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='sangat baik' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question2</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='stb' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='tidak baik' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='biasa' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='baik' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='sangat baik' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question3</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='stb' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='tidak baik' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='biasa' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='baik' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='sangat baik' && floor='2'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
    		<td width="300"align="center"><b>Question Floor 3</b></td>
    		<td width="100"align="center"><b>sangat buruk</b></td>
    		<td width="100"align="center"><b>buruk</b></td>
    		<td width="100"align="center"><b>cukup</b></td>
    		<td width="100"align="center"><b>baik</b></td>
    		<td width="100"align="center"><b>sangat baik</b></td>
    	</tr>
      <tr>
        <td width="300">question1</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='stb' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='tidak baik' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='biasa' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='baik' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='sangat baik' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question2</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='stb' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='tidak baik' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='biasa' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='baik' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='sangat baik' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question3</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='stb' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='tidak baik' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='biasa' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='baik' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='sangat baik' && floor='3'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
    		<td width="300"align="center"><b>Question Floor 4</b></td>
    		<td width="100"align="center"><b>sangat buruk</b></td>
    		<td width="100"align="center"><b>buruk</b></td>
    		<td width="100"align="center"><b>cukup</b></td>
    		<td width="100"align="center"><b>baik</b></td>
    		<td width="100"align="center"><b>sangat baik</b></td>
    	</tr>
      <tr>
        <td width="300">question1</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='stb' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='tidak baik' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='biasa' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='baik' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='sangat baik' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question2</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='stb' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='tidak baik' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='biasa' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='baik' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='sangat baik' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question3</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='stb' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='tidak baik' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='biasa' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='baik' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='sangat baik' && floor='4'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
    		<td width="300"align="center"><b>Question Floor 5</b></td>
    		<td width="100"align="center"><b>sangat buruk</b></td>
    		<td width="100"align="center"><b>buruk</b></td>
    		<td width="100"align="center"><b>cukup</b></td>
    		<td width="100"align="center"><b>baik</b></td>
    		<td width="100"align="center"><b>sangat baik</b></td>
    	</tr>
      <tr>
        <td width="300">question1</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='stb' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='tidak baik' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='biasa' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='baik' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='sangat baik' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question2</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='stb' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='tidak baik' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='biasa' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='baik' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='sangat baik' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question3</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='stb' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='tidak baik' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='biasa' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='baik' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='sangat baik' && floor='5'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
    		<td width="300"align="center"><b>Question Floor 6</b></td>
    		<td width="100"align="center"><b>sangat buruk</b></td>
    		<td width="100"align="center"><b>buruk</b></td>
    		<td width="100"align="center"><b>cukup</b></td>
    		<td width="100"align="center"><b>baik</b></td>
    		<td width="100"align="center"><b>sangat baik</b></td>
    	</tr>
      <tr>
        <td width="300">question1</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='stb' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='tidak baik' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='biasa' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='baik' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q1) AS jumlah FROM `data` WHERE q1='sangat baik' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question2</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='stb' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='tidak baik' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='biasa' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='baik' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q2) AS jumlah FROM `data` WHERE q2='sangat baik' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
      <tr>
        <td width="300">question3</td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='stb' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='tidak baik' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='biasa' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='baik' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
        <td width="100"><?php
        $sql = "SELECT COUNT(q3) AS jumlah FROM `data` WHERE q3='sangat baik' && floor='6'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        echo "{$result['jumlah']}";?></td>
      </tr>
    	</tbody>
    </table><br />



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
