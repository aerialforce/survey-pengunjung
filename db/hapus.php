<?php
include"koneksi.php";
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:logout.php');
}
$id=$_GET['id'];
$hapus="delete from user where id='$id'";
$hasil=mysqli_query($con,$hapus);
if($hapus){
	echo"<script>alert('data berhasil dihapus');window.location.href='../admin/account.php';</script>";

}?>
