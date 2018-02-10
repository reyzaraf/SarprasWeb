<?php
include '../Koneksi.php';

if(isset($_POST['apply'])) {
		$kode_barang 	= $_POST['kode_barang'];
		$nama_barang 	= $_POST['nama_barang'];
		$spesifikasi 	= $_POST['spesifikasi'];
		$lokasi_barang	= $_POST['lokasi_barang'];
		$kategori		= $_POST['kategori'];
		$jml_barang		= $_POST['jml_barang'];
		$kondisi		= $_POST['kondisi'];
		$jenis_barang	= $_POST['jenis_barang'];
		$sumber_dana	= $_POST['sumber_dana'];

	$hasil = mysql_query("INSERT INTO barang(kode_barang,nama_barang,spesifikasi,lokasi_barang,kategori,jml_barang,kondisi,jenis_barang,sumber_dana) Values('$kode_barang','$nama_barang','$spesifikasi','$lokasi_barang','$kategori','$jml_barang','$kondisi','$jenis_barang','$sumber_dana')");
	if($hasil){
		header('location:admin.php');
	}else{
		Echo "Ada Kesalahan";
	}
}

?>