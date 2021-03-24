<!DOCTYPE html>
<?php
session_start();
if($_SESSION['islogin']!=true){
  header ('location:../index.php');
}
if($_SESSION['level']=='operator1'){
  $floor='1';
}
elseif ($_SESSION['level']=='operator2') {
  $floor='2';
}
elseif ($_SESSION['level']=='operator3') {
  $floor='3';
}
elseif ($_SESSION['level']=='operator4') {
  $floor='4';
}
elseif ($_SESSION['level']=='operator5') {
  $floor='5';
}
elseif ($_SESSION['level']=='operator6') {
  $floor='6';
}
elseif ($_SESSION['level']=='operator7') {
  $floor='7';
}
else {
header ('location:../db/logout.php');
}
include"../db/koneksi.php";
 ?>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Pusat Perpustakaan - Satisfaction Survey System</title>
     <link href="../css/style.css" type="text/css" rel="stylesheet" />


     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="../css/animate.css">
     <link rel="stylesheet" href="../css/style2.css">
   </head>
   <body>
     <script>
     function play(){
       var audio = document.getElementById("audio");
audio.play();
}</script>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="lantai1.php">Pusat Perpustakaan - Lantai <?php echo $floor ?></a>
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
              <li class="nav-item cta"><a onclick="return confirm('Yakin akan keluar?')" href="../db/logout.php" class="nav-link" data-target="#modalRequest"><span>logout</span></a></li>
              </ul>
          </div>
        </div>
      </nav>
      <section class="ftco-section ftco-section-2">

      	<div class="container">
      		<div class="row">

      		</div>
      	</div>
      </section>
      <section class="ftco-section-parallax ftco-animate">
        <!-- <div class="parallax-img d-flex align-items-center"> -->
          <div class="container">
            <div class="row d-flex justify-content-center ftco-animate">
              <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <form action="../db/inputer1.php?id=<?php echo $floor ?>" method="post">
                <h2><?php
                $sql ="SELECT * from question where id_text='$floor+a'";
                $query = mysqli_query($con,$sql);
                $buff=mysqli_fetch_array($query);
                echo $buff ['text'];?></h2>

                <fieldset id="group1">

                <label>
                  <input type="radio" name="q1" value="tidak puas" required=required >
                  <img src="../images/Emot4/sgt-tdk-puas.gif" width="115px" height="115px">
                  <!-- <br/> <p>tidak puas</p> -->
                </label>

                <label>
                  <input type="radio" name="q1" value="kurang puas">
                  <img src="../images/Emot4/tidak-puas.gif" width="115px" height="115px">
                  <!-- <br/> <p>kurang puas</p> -->
                </label>
                <label>
                  <input type="radio" name="q1" value="puas">
                  <img src="../images/Emot4/puas.gif" width="115px" height="115px">
                  <!-- <br/> <p>puas</p> -->
                </label>
                <label>
                  <input type="radio" name="q1" value="sangat puas">
                  <img src="../images/Emot4/sangat-puas.gif" width="115px" height="115px">
                  <!-- <br/> <p>sangat puas</p> -->
                </label>

              </fieldset>


              <h2>
                <?php
                $sql ="SELECT * from question where id_text='$floor+b'";
                $query = mysqli_query($con,$sql);
                $buff=mysqli_fetch_array($query);
                echo $buff ['text'];?>
                </h2>

              <fieldset id="group2">
              <label>
                <input type="radio" name="q2" value="tidak puas" required=required >
                <img src="../images/Emot4/sgt-tdk-puas.gif" width="115px" height="115px">
                <!-- <br/> <p>tidak puas</p> -->
              </label>
              <label>
                <input type="radio" name="q2" value="kurang puas">
                <img src="../images/Emot4/tidak-puas.gif" width="115px" height="115px">
                <!-- <br/> <p>kurang puas</p> -->
              </label>
              <label>
                <input type="radio" name="q2" value="puas">
                <img src="../images/Emot4/puas.gif" width="115px" height="115px">
                <!-- <br/> <p>puas</p> -->
              </label>
              <label>
                <input type="radio" name="q2" value="sangat puas">
                <img src="../images/Emot4/sangat-puas.gif" width="115px" height="115px">
                <!-- <br/> <p>sangat puas</p> -->
              </label>
            </fieldset>
              <h2>Kritik dan Saran</h2>
            <textarea name="saran"  cols=70 rows=3  placeholder="Tulis pesan Anda disini"></textarea>
            <br></br>
                <input type="submit" name="submit" value="Submit" onclick="play()">
                <audio id="audio" src="../images/thankyou.mp3" ></audio>
              </div>


                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> -->
                <!-- <div class="row d-flex justify-content-center mt-5">
                  <div class="col-md-8">
                    <form action="#" class="subscribe-form">
                      <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                      </div>
                    </form>
                  </div>
                </div> -->
              <!-- </div> -->
              <!-- <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2>Subcribe to our Newsletter</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                <div class="row d-flex justify-content-center mt-5">
                  <div class="col-md-8">
                    <form action="#" class="subscribe-form">
                      <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                      </div>
                    </form>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>
      <script src="../js/jquery.min.js"></script>
      <script src="../js/jquery-migrate-3.0.1.min.js"></script>

      <script src="../js/jquery.waypoints.min.js"></script>
      <script src="../js/jquery.stellar.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>

      <script src="../js/aos.js"></script>

      <script src="../js/scrollax.min.js"></script>
      <script src="../js/mainoperator.js"></script>

   </body>
</html>
