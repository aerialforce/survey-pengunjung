<?php
include"koneksi.php";
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:logout.php');
}
$floor=$_GET['floor'];
if(isset($_POST['floor'])){
$edit="update question set text='$_POST[q1]' where id_text='$floor+a'";
$edit2="update question set text='$_POST[q2]' where id_text='$floor+b'";
$hasil=mysqli_query($con,$edit);
$hasil2=mysqli_query($con,$edit2);
if ($hasil2){
	echo "<script>alert('pertanyaan berhasil diedit');window.location.href='../admin/question.php';</script>";

}}?>
