<?php 
session_start();

if (!isset($_SESSION['username'])) {
	echo "<script>alert('anda belum login');</script>";
	header("location: ../index.php");
}
if ($_SESSION['level']!="1") {
	echo "<script>alert('anda bukan admin');</script>";
	header("location:../login.php");
}




 ?>