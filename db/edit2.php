<?php
include"koneksi.php";
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:logout.php');
}
if(isset($_POST['id'])){
$edit="update user set namadep='$_POST[namadep]',namabel='$_POST[namabel]',
username='$_POST[username]',password='$_POST[password]',alamat='$_POST[alamat]',
email='$_POST[email]',notel='$_POST[notel]',level='$_POST[level]'
where id='$_POST[id]'";
$hasil=mysqli_query($con,$edit);
if ($hasil){
	echo "<script>alert('data berhasil diedit');window.location.href='../admin/account.php';</script>";

}}?>
