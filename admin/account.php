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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="data.php" class="nav-link">Data</a></li>
            <li class="nav-item"><a href="question.php" class="nav-link">Question</a></li>
            <li class="nav-item active"><a href="account.php" class="nav-link">Account</a></li>

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
      <div class="col-md-10 text-center heading-section ftco-animate">
        <h2 class="mb-2">Account List</h2>
        <span class="subheading">Satisfaction Survey System</span>
        <a href="tambah.php">Add Account</a>

    <?php
    // $nama=$_SESSION['nama'];
    include"../db/koneksi.php";
    $select="select * from user";
    $hasil=mysqli_query($con,$select);

    ?>

        <table class="zebra-table" width="1200" border="1">
    	<thead class="huruf">
    	<tr>
        <td width="30"align="center"><b><strong>ID</strong></b></td>
        <td width="100"align="center"><b><strong>Nama Depan</strong></b></td>
        <td width="100"align="center"><b><strong>Nama Belakang</strong></b></td>
        <td width="300"align="center"><b><strong>Alamat</strong></b></td>
        <td width="100"align="center"><b><strong>Notel</strong></b></td>
        <td width="100"align="center"><b><strong>Email</strong></b></td>
        <td width="100"align="center"><b><strong>Username</strong></b></td>
        <td width="100"align="center"><b><strong>Password</strong></b></td>
        <td width="130"align="center"><b><strong>Level</strong></b></td>
        <td colspan="2"align="center"><b><strong>Aksi</strong></b></td>
    	</tr>
    	</thead>


    	<tbody class="huruf">

        <?php
        while($buff=mysqli_fetch_array($hasil)){
        ?>

        	<tr>
        		<td width="30"><?php echo $buff ['id'];?></td>
        		<td width="100"><?php echo $buff ['namadep'];?></td>
        		<td width="100"><?php echo $buff ['namabel'];?></td>
        		<td width="300"><?php echo $buff ['alamat'];?></td>
        		<td width="100"><?php echo $buff ['notel'];?></td>
        		<td width="100"><?php echo $buff ['email'];?></td>
        		<td width="100"><?php echo $buff ['username'];?></td>
        		<td width="100"><?php echo $buff ['password'];?></td>
        		<td width="130"><?php echo $buff ['level'];?></td>
        		<td width="70"><a href="edit.php?id=<?php echo $buff ['id'];?>">Edit</a></td>
        		<td width="70"><a onclick="return confirm('Yakin akan menghapus?');" href="../db/hapus.php?id=<?php echo $buff ['id'];?>">Hapus</a></td>
        	</tr>

        <?php
        };
        mysqli_close($con);
        ?>
    	</tbody>
    </table><br />
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
