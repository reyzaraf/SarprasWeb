<?php 
include '../koneksi.php';
	include 'cekadmin.php';
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
		position:absolute;
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
				<a href="supplier.php">Data Supplier</a>
			</li>
			<li>
				<a href="barang.php">Data Barang</a>
			</li>
			<li><a href="barang-masuk.php">
				Data Barang Masuk
			</a></li>
			<li><a href="barang-keluar.php">
				Data Barang keluar
			</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</nav>
	<br><br><br><br>
	<div class="form-table"><center>		
			<h3>Data Table</h3>
					<a class='btn-tambah' style="float: right;" href="lap-barang.php">Print Barang</a><br>	
					<a class='btn-tambah' style="float: right;" href="barang.php">Tambah Barang</a><br>	
		<table>	
			<tr style="border-bottom: 1px solid black;padding: 10px;margin: 20px;">
			<th>No.</th>
			<th>kode barang</th>
			<th>nama barang</th>
			<th>spesifikasi</th>
			<th>lokasi barang</th>
			<th>kategori</th>
			<th>jumlah</th>
			<th>kondisi</th>
			<th>jenis</th>
			<th>sumber dana</th>
			<th colspan="2">option</th>

			</tr>
				<?php 	
				$sql = "SELECT * FROM barang";
				$run = mysql_query($sql);
				$nomor = 1 ;
				while ($row=mysql_fetch_array($run)) {
					extract($row);
					echo "<tr>";
					echo "<td>".$nomor."</td>";
					echo "<td>".$kode_barang."</td>";
					echo "<td>".$nama_barang."</td>";
					echo "<td>".$spesifikasi."</td>";
					echo "<td>".$lokasi_barang."</td>";
					echo "<td>".$kategori."</td>";
					echo "<td>".$jml_barang."</td>";
					echo "<td>".$kondisi."</td>";
					echo "<td>".$jenis_barang."</td>";
					echo "<td>".$sumber_dana."</td>";

					echo "<td><a class='btn-delete'  href='delete-barang.php?kode_barang=".$kode_barang."'>Delete</a></td>
					<td><a class='btn-edit' href='edit-barang.php?kode_barang=".$kode_barang."'>Edit</a></td>";
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