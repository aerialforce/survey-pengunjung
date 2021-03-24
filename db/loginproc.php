<?php

include "koneksi.php";
$query = mysqli_query($con,"Select * from user where (username='".$_POST['username']."') and (password='".$_POST['password']."')");
$kolom = mysqli_num_rows($query);
$buff = mysqli_fetch_array($query);
if($kolom==1){
  session_start();
  $_SESSION['islogin']=true;
  $_SESSION["username"] = $_POST["username"];
  $_SESSION['password'] = $_POST["password"];
  $_SESSION["id"] = $buff['id'];
  $_SESSION["level"] = $buff['level'];
  if($buff['level'] == 'admin'){
    echo "<script>alert('Selamat Datang ".$buff['username']."');window.location.href='../admin/index.php';</script>";
  }
  elseif ($buff['level']=='operator1') {
    echo "<script>alert('Selamat Datang ".$buff['username']."');window.location.href='../operator/lantai1.php';</script>";
  }
  elseif ($buff['level']=='operator2') {
    echo "<script>alert('Selamat Datang ".$buff['username']."');window.location.href='../operator/lantai1.php';</script>";
  }
  elseif ($buff['level']=='operator3') {
    echo "<script>alert('Selamat Datang ".$buff['username']."');window.location.href='../operator/lantai1.php';</script>";
  }
  elseif ($buff['level']=='operator4') {
    echo "<script>alert('Selamat Datang ".$buff['username']."');window.location.href='../operator/lantai1.php';</script>";
  }
  elseif ($buff['level']=='operator5') {
    echo "<script>alert('Selamat Datang ".$buff['username']."');window.location.href='../operator/lantai1.php';</script>";
  }
  elseif ($buff['level']=='operator6') {
    echo "<script>alert('Selamat Datang ".$buff['username']."');window.location.href='../operator/lantai1.php';</script>";
  }
  elseif ($buff['level']=='operator7') {
    echo "<script>alert('Selamat Datang ".$buff['username']."');window.location.href='../operator/lantai1.php';</script>";
  }
  elseif ($buff['level']=='pimpinan'){
    echo "<script>alert('Selamat Datang Pimpinan".$buff['namadep']." ".$buff['namabel']."');window.location.href='../pimpinan/index.php'</script>";
  }
  else {
    echo "<script>alert('Akun Anda Belum Disetujui');window.location.href='../index.php';</script>";
  }
}
else {
  echo "<script>alert('Username/Password Salah');window.location.href='../index.php';</script>";
}
 ?>
