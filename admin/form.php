<?php 
include '../koneksi.php';
//		include 'cekadmin.php';
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
	.header{
		padding: 13px;
		border-bottom: 1px solid white;
		color: white;
		background: #039be5;
		text-align: center;
		font-size: 30px;
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
		color: white;
		text-align: center;
		position: fixed;
		bottom: 0;		
		padding: 10px;
		font-size: 15px;
		background: #039be5;
	}
	table{
		width: 70%;
		text-align: center;
		font-size: 20px;
	}
	th {
		padding: 30px;
		border-bottom: 2px solid #039be5;
	}
	td{
		padding: 10px;
	}
	.input{
		height:30px;
		border: 0.8px solid #039be5;
		border-radius:5px;
		width: 300px;
	}
	.button{
		background: #039be5;
		margin-top: 24px;
		border:0px;
		color: white;
		font-size: 20px; 			
		padding: 10px;
		width: 250px;
		height: 40px;
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
		</ul>
	</nav>
	<div><center>		
			<h3 style="border-bottom:3px solid #039be5;color: #039be5;		">Data Table</h3>
		<form method="" action="">	
		<table >	
			<tr style="border-bottom: 1px solid black;padding: 10px;margin: 20px;">
				
				<td>Kode Barang</td>
				<td>Nama barang</td>
			</tr>
			<tr>	
				<td><input class="input" type="text" name="form"></td>
				<td><input class="input" type="text" name="form"></td>
			</tr>
			<tr style="border-bottom: 1px solid black;padding: 10px;margin: 20px;">
				
				<td>Kode Barang</td>
				<td>Nama barang</td>
			</tr>
			<tr>	
				<td><input class="input" type="text" name="form"></td>
				<td><input class="input" type="text" name="form"></td>
			</tr>
			<tr style="border-bottom: 1px solid black;padding: 10px;margin: 20px;">
				
				<td>Kode Barang</td>
				<td>Nama barang</td>
			</tr>
			<tr>	
				<td><input class="input" type="text" name="form"></td>
				<td><input class="input" type="text" name="form"></td>
			</tr>
			<tr>
				<td colspan="2"><input class="button" type="button" value="Submit"></td>
			</tr>
		</table>
		</form>
	</div></center>
	<footer>
		&copy;Copyright by Bocah gabut
	</footer>
</body>
</html>