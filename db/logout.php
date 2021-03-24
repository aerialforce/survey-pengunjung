<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['islogin']);
unset($_SESSION['id']);
unset($_SESSION['level']);
session_destroy();
echo "<script>alert('logout berhasil');
window.location.href='../index.php';</script>";
mysqli_close();
?>
