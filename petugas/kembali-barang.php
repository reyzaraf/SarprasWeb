<?php 	
include '../koneksi.php';
$no_pinjam = $_GET['no_pinjam'];
$query = "SELECT * FROM pinjam_barang WHERE no_pinjam='$no_pinjam' ";
$hasil = mysql_query($query);
$data_barang = mysql_fetch_assoc($hasil);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<form method="POST" action="proses-kembali.php">	
		<input type="text" name="no_pinjam" value="<?php echo $data_barang['no_pinjam']; ?>" readonly>
		<input type="text" name="tgl_kembali" value="<?php echo date('Y-m-d'); ?>" readonly>

		<input type="submit" name="submit" value="simpan">
	</form>
</body>
</html>