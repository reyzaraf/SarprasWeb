<?php 	
include '../koneksi.php';
if (isset($_GET['kode_barang'])) {
	$kode_barang = $_GET['kode_barang'];
	$run = mysql_query("DELETE FROM barang WHERE kode_barang='$kode_barang'") or die(mysql_error());
		header("location:admin.php");
}


 ?>