<?php 	
include '../koneksi.php';
$barang = $_GET['kode_barang'];
$query = "SELECT * FROM barang WHERE kode_barang='$barang' ";
$hasil = mysql_query($query);
$data_barang = mysql_fetch_assoc($hasil);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<form method="POST" action="proses-edit-barang.php">	
		<input type="hidden" name="kode_barang" value="<?php echo $data_barang['kode_barang']; ?>">

		<input type="text" name="nama_barang" value="<?php echo $data_barang['nama_barang']; ?>">

		<input type="text" name="spesifikasi" value="<?php echo $data_barang['spesifikasi']; ?>">

		<input type="text" name="lokasi_barang" value="<?php echo $data_barang['lokasi_barang']; ?>">

		<input type="text" name="kategori" value="<?php echo $data_barang['kategori']; ?>">

		<input type="text" name="jml_barang" value="<?php echo $data_barang['jml_barang']; ?>" readonly>

		<input type="text" name="kondisi" value="<?php echo $data_barang['kondisi']; ?>">

		<input type="text" name="jenis_barang" value="<?php echo $data_barang['jenis_barang']; ?>">

		<input type="text" name="sumber_dana" value="<?php echo $data_barang['sumber_dana']; ?>">

		<input type="submit" name="submit" value="simpan">
	</form>
</body>
</html>