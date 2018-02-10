<?php 
include '../koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
		*{
			padding:0;
			margin: 0;
			font-family: century gothic;

		}
		body{
			background: rgba(215,215,215,0.6);
		}
	.header{
		padding: 13px;
		border-bottom: 1px solid white;
		color: white;
		background: #039be5;
		text-align: center;
		font-size: 30px;
	}
	.form-table{
		position: relative;
		height: 100%;
		padding: 15px;				
	}
	nav{

		width: auto;
	}
	nav ul {
		width: 100%;
		background: #039be5;
		list-style: none;
		display: inline-flex;
		float: right;
	}
	nav ul li{
		border-right:1px solid white;
		padding: 20px;
	}
	nav ul li a{
		color: white;
		text-decoration: none;
	}footer{
		width: 100%;
    height:30px;
    line-height:30px;
		color: white;
		text-align: center;
		position:fixed;
		bottom: 0px;		
		font-size: 15px;
		background: #039be5;
	}
	table{
		width: 80%;
		border-collapse: collapse;
		font-size: 16px;
		border-radius: 10px;
		vertical-align: top;
	}
	th {
		padding: 30px;
		border-collapse: collapse;
		vertical-align: top;
		border-style: inherit;
		border-bottom: 2px solid rgba(155,155,155,0.5);
	 
	}
	td{
		background: white;
		margin: 0;
		text-align: center;
		border-style: inherit;
		padding: 0;
		border-bottom: 2px solid rgba(1,1,1,0.5);
	 	padding: 15px;
	}
	.btn-tambah{
		color: white;
		padding: 13px;
		width: auto;
		text-decoration: none;
		background: rgba(40,220,20,0.7);
	}

	.btn-delete{
		color: white;
		padding: 13px;
		width: auto;
		text-decoration: none;
		background: rgba(220,40,20,0.7);
	}
	.btn-edit{
		color: white;
		width: auto;
		padding: 13px;
		text-decoration: none;
		background: rgba(0,0,250,0.7);
	}
	
</style>
</head>
<body>
	<header class="header">
		Inventaris Sarana Prasarana Sekolah 
	</header>
	<nav>
		<ul>
			<li>
				<a href="supplier.php">Data peminjaman</a>
			</li>
			<li>
				<a href="barang.php">Data Barang</a>
			</li>
			<li><a href="barang-masuk.php">
				Data Stok
			</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</nav>
	<br><br><br><br>
	<div class="form-table"><center>		
			<h3>Data Table</h3>
					<a class='btn-tambah' style="float: right;" href="tambah-pinjam.php">pinjam Barang</a><br><br><br>	
		<table>	
			<tr style="border-bottom: 1px solid black;padding: 10px;margin: 20px;">
			<th>No.</th>
			<th>Nomor pinjam</th>
			<th>tanggal pinjam</th>
			<th>kode barang</th>
			<th>nama barang</th>
			<th>jumlah pinjam</th>
			<th>peminjam</th>
			<th>tanggal kembali</th>
			<th>keperluan</th>
			<th colspan="5">option</th>

			</tr>
				<?php 	
				$sql = "SELECT * FROM pinjam_barang";
				$run = mysql_query($sql);
				$nomor = 1 ;
				while ($row=mysql_fetch_array($run)) {
					extract($row);
					echo "<tr>";
					echo "<td>".$nomor."</td>";
					echo "<td>".$no_pinjam."</td>";
					echo "<td>".$tgl_pinjam."</td>";
					echo "<td>".$kode_barang."</td>";
					echo "<td>".$nama_brg."</td>";
					echo "<td>".$jml_pinjam."</td>";
					echo "<td>".$peminjam."</td>";
					echo "<td>".$tgl_kembali."</td>";
					echo "<td>".$keperluan."</td>";
					echo "<td><a class='btn-delete' href='kembali-barang.php?no_pinjam=".$no_pinjam."'>Kembali</a></td>
					";
					echo "</tr>";
					$nomor++;
				}

				 ?>
		</table>
	</div></center>
	<footer>
		&copy;Copyright by Bocah gabut
	</footer>
</body>
</html>