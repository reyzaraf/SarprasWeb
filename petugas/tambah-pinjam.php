<?php 	
include '../koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>pinjam Barang</title>
</head>

<body>
<form action="proses-pinjam.php" method="post">
<table width="50%" border="1" align="center">
	<tr>
		<td>Nomor Pinjam</td>
		<td><input type="text" name="no_pinjam"></td>
	</tr>
	<tr>
		<td>tanggal pinjam</td>
		<td><input type="date" name="tgl_pinjam"></td>
	</tr>
	<tr>
		<td>kode brang</td>
		<td><input type="text" name="kode_barang"></td>
	</tr>
	<tr>
		<td>nama barang</td>
		<td><input type="text" name="nama_brg"></td>
	</tr>
	<tr>
		<td>jumlah pinjam</td>
		<td><input type="text" name="jml_pinjam"></td>
	</tr>
	<tr>
		<td>Peminjam</td>
		<td><input type="text" name="peminjam"></td>
	</tr>
	<tr>
		<td>Keperluan</td>
		<td><input type="text" name="Keperluan"></td>
	</tr>
	<tr>
		<td><input type="submit" name="apply" value="Pinjam_barang"></td>
	</tr>
</table>
</body>
</html>