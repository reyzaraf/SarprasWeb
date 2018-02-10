<?php
include '../Koneksi.php';

if(isset($_POST['apply'])) {
		$no_pinjam 	= $_POST['no_pinjam'];
		$tgl_pinjam 	= $_POST['tgl_pinjam'];
		$kode_barang 	= $_POST['kode_barang'];
		$nama_brg	    = $_POST['nama_brg'];
		$jml_pinjam		= $_POST['jml_pinjam'];
		$peminjam		= $_POST['peminjam'];
		$Keperluan  	= $_POST['Keperluan'];

	$hasil = mysql_query("INSERT INTO pinjam_barang(no_pinjam,tgl_pinjam,kode_barang,nama_brg,jml_pinjam,peminjam,Keperluan) Values('$no_pinjam','$tgl_pinjam','$kode_barang','$nama_brg','$jml_pinjam','$peminjam','$Keperluan')");
	if($hasil){
		header('location:index.php');
	}else{
		Echo "Ada Kesalahan";
	}
}

?>