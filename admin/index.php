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
		width: 90%;
		border-collapse: collapse;
		font-size: 18px;
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
	.card-hello{
		text-align: center;
		width: 100%;
		 box-shadow: 3px 3px 5px 6px #ccc;
		background:white;
	}.card-hello h2{
		padding:50px;
		text-shadow: 0 1px 0 rgba(255, 255, 255, 0.4);
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
		padding: 10px;
		width: auto;
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
				<a href="data-barang.php">Data Barang</a>
			</li>
			<li><a href="barang-masuk.php">
				Data Barang Masuk
			</a></li>
			<li><a href="barang-keluar.php">
				Data Barang keluar
			</a></li>
		</ul>
	</nav>
	<br>	<br>	<br>	<br>	<br>	<br>	
	<div class="card-hello">	
	<center>			<h2>Selamat Datang <?php echo $_SESSION['username']; ?></h2></center>
	</div>
	<footer>
		&copy;Copyright by Bocah gabut
	</footer>
</body>
</html>