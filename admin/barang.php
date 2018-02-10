<?php 	

include '../koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang</title>
</head>

<body>
<form action="tambah-barang.php" method="post">
<table width="50%" border="1" align="center">
	<tr>
		<td>Kode Barang</td>
		<td><input type="text" name="kode_barang"></td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang"></td>
	</tr>
	<tr>
		<td>Spesifikasi</td>
		<td><input type="text" name="spesifikasi"></td>
	</tr>
	<tr>
		<td>Lokasi Barang</td>
		<td><input type="text" name="lokasi_barang"></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td><input type="text" name="kategori"></td>
	</tr>
	<tr>
		<td>Jumlah Barang Tersedia</td>
		<td><input type="text" name="jml_barang"></td>
	</tr>
	<tr>
		<td>Kondisi Barang</td>
		<td><input type="text" name="kondisi"></td>
	</tr>
	<tr>
		<td>Jenis Barang</td>
		<td><input type="text" name="jenis_barang"></td>
	</tr>
	<tr>
		<td>Sumber Dana</td>
		<td><input type="text" name="sumber_dana"></td>
	</tr>
	<tr>
		<td><input type="submit" name="apply" value="Tambah Barang"></td>
	</tr>
</table>
</body>
</html>