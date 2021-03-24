<?php
include "koneksi.php";
session_start();
if(($_SESSION['islogin']!=true)||($_SESSION["level"]!='admin')){
  header ('location:logout.php');
}
$mysql= "INSERT INTO user
(namadep, namabel, username, password, alamat, email, notel, level) VALUES
('$_POST[namadep]',
'$_POST[namabel]','$_POST[username]','$_POST[password]','$_POST[alamat]',
'$_POST[email]','$_POST[notel]','$_POST[level]')";

if(!mysqli_query($con,$mysql))
	die (mysqli_error());

echo"<script>alert('akun berhasil ditambahkan');window.location.href='../admin/account.php';</script>";

mysqli_close($con);
?>
