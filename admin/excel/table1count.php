<!DOCTYPE html>
<?php
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:../../index.php');
}
include"../../db/koneksi.php";
$floor=$_GET['floor'];
 ?>
 <html lang="en">
   <head>
     <title>Pusat Perpustakaan - Visitors Satisfaction Survey</title>
   </head>

   <body>

    <?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_survey_lantai$floor.xls");
?>
  <h2 align="center"><strong>Data Survey Lantai <?php echo $floor ?></strong></h2><br />

    <table border="1">
    	<tr>
        <td></td>
    		<td width="500"align="center"><b><strong>Pertanyaan</strong></b></td>
    		<td width="100"align="center"><b><strong>tidak puas</strong></b></td>
    		<td width="100"align="center"><b><strong>kurang puas</strong></b></td>
    		<td width="100"align="center"><b><strong>puas</strong></b></td>
    		<td width="100"align="center"><b><strong>sangat puas</strong></b></td>
    	</tr>
    	<tr>
        <td></td>
    		<td width="500"><?php
        $sql ="SELECT * from question where id_text='$floor+a'";
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
        <td></td>
    		<td width="300"><?php
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

    </table>
  <br />

  <h2 align="center"><strong>Kritik & Saran - Lantai <?php echo $floor ?></strong></h2><br />
  <table width="830" border="1">
    <tr>

      <td width="30"align="center"><b><strong>id</strong></b></td>
      <td width="500"align="center"><b><strong>Kritik & Saran</strong></b></td>
      <td width="100"align="center"><b><strong>tanggal</strong></b></td>
      <td width="100"align="center"><b><strong><?php
      $sql ="SELECT * from question where id_text='$floor+a'";
      $query = mysqli_query($con,$sql);
      $buff=mysqli_fetch_array($query);
      echo $buff ['text'];?></strong></b></td>
      <!-- <td width="100"align="center"><b><strong>cukup</strong></b></td> -->
      <td width="100"align="center"><b><strong><?php
      $sql ="SELECT * from question where id_text='$floor+b'";
      $query = mysqli_query($con,$sql);
      $buff=mysqli_fetch_array($query);
      echo $buff ['text'];?></strong></b></td>

    </tr>

      <?php
      $pilih="select * from data where floor='$floor' && saran != ''";
      $hasil=mysqli_query($con,$pilih);
while($buff=mysqli_fetch_array($hasil)){
      ?>
    <tr>
    		<td width="30"><?php echo $buff ['id_data'];?></td>
        <td width="500"><?php echo $buff ['saran'];?></td>
    		<td width="100"><?php echo $buff ['time'];?></td>
    		<td width="100"><?php echo $buff ['q1'];?></td>
        <td width="100"><?php echo $buff ['q2'];?></td>

    </tr>
    <?php
    };
    mysqli_close($con);
    ?>

  </table>

  </body>
</html>
