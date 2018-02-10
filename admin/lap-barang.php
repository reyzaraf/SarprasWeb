<?php 	



 ?>
 <?php 	include '../koneksi.php'; ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>	</title>
 </head>
 <body onload="print()">
 		<a style="text-decoration: none;" href="admin.php"><==</a>
 		<center><h1> Laporan Data Barang Masuk	</h1>
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
					$nomor++;
				}

				 ?>
		</table>
 </body>
 </html>