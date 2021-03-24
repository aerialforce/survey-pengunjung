<?php
session_start();
$id=$_GET['id'];
include "koneksi.php";
$user= $_SESSION["id"];
if ($_POST['saran']=="logout") {
	echo"<script>window.location.href='logout.php';</script>";
}
else{
$mysql= "INSERT INTO data
(id_user, floor, q1, q2, saran) VALUES
('$user', '$id', '$_POST[q1]','$_POST[q2]',
'$_POST[saran]')";

if(!mysqli_query($con,$mysql))
	die (mysqli_error($con));

echo"<script>window.location.href='../operator/lantai1.php';</script>";
}
mysqli_close($con);
?>
