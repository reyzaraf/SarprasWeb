<?php 	
include '../koneksi.php';
		$kode_barang 	= $_POST['kode_barang'];
		$nama_barang 	= $_POST['nama_barang'];
		$spesifikasi 	= $_POST['spesifikasi'];
		$lokasi_barang	= $_POST['lokasi_barang'];
		$kategori		= $_POST['kategori'];
		$jml_barang		= $_POST['jml_barang'];
		$kondisi		= $_POST['kondisi'];
		$jenis_barang	= $_POST['jenis_barang'];
		$sumber_dana	= $_POST['sumber_dana'];
		$query		    = "UPDATE barang SET 
							nama_barang='$nama_barang',
							spesifikasi='$spesifikasi',
							lokasi_barang='$lokasi_barang',
							kategori='$kategori',
							jml_barang='$jml_barang',
							kondisi='$kondisi',
							jenis_barang='$jenis_barang',
							sumber_dana='$sumber_dana'
							WHERE kode_barang = '$kode_barang'
								";
		$hasil = mysql_query($query);

		if ($hasil==true) {
			header('location:admin.php');
		}
		else{
			header('location:edit-barang.php');
		}





 ?>