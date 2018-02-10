<?php 	
include '../koneksi.php';
		$no_pinjam	 	= $_POST['no_pinjam'];
		$tgl_kembali	= $_POST['tgl_kembali'];
		$query		    = "UPDATE pinjam_barang SET 
							tgl_kembali='$tgl_kembali',
							WHERE no_pinjam = '$no_pinjam'
								";
		$hasil = mysql_query($query);

		if ($hasil==true) {
			header('location:data-barang.php');
		}
		else{
			header('location:edit-barang.php');
		}





 ?>