<!DOCTYPE html>
<?php
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:../index.php');
}
$floor=$_GET['floor'];
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
 	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
 	        <span class="oi oi-menu"></span> Menu
 	      </button>

 	      <div class="collapse navbar-collapse" id="ftco-nav">
 	        <ul class="navbar-nav ml-auto">
 	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
 	          <li class="nav-item"><a href="data.php" class="nav-link">Data</a></li>
            <li class="nav-item active"><a href="question.php" class="nav-link">Question</a></li>
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
    <div class="container-fluid">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">

        <h2>Edit Pertanyaan Lantai <?php echo $floor ?></h2><br />
        <form action="../db/edit.php?floor=<?php echo $floor; ?>" method="post">
        <table border="0" align="center">
        <input type="hidden" name="floor" value=<?php echo $floor ?>/>
          <tr>
            <td width="100">Pertanyaan 1</td>
            <td width="250"><textarea required=required cols=50 rows=2 name="q1"><?php
            $sql ="SELECT * from question where id_text='$floor+a'";
            $query = mysqli_query($con,$sql);
            $buff=mysqli_fetch_array($query);
            echo $buff ['text'];?></textarea></td>
          </tr>
          <tr>
            <td>Pertanyaan 2</td>
            <td><textarea required=required cols=50 rows=2 name="q2"><?php
            $sql ="SELECT * from question where id_text='$floor+b'";
            $query = mysqli_query($con,$sql);
            $buff=mysqli_fetch_array($query);
            echo $buff ['text'];?></textarea></td>
          </tr>
          <tr>
            <td height="68" align="right"></td>
            <td><input type="submit" value="Submit" /> <input type="reset" value="Reset" /></td>
          </tr>
        </table>
        </form>

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
<?php
mysqli_close($con);
?>
