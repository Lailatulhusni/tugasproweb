<?php 
session_start();
echo "<script>alert('Berhasil Logout');window.location=('index.php')</script>";
session_destroy();
?>