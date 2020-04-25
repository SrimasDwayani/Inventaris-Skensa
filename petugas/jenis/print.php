<?php 
	include_once("../conf/koneksi.php");

	$query= "SELECT * FROM jenis";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])) {
		$cari= $_POST['keywoard'];
		$hasil  = mysqli_query($conn, "SELECT * FROM jenis WHERE nama_jenis like '%$cari%' ");
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Inventaris SMK Negeri 1 Denpasar</title>
 </head>
 <body>
 	<div class="ruang">
 	<center>
 		<h2>Jenis Barang Inventaris</h2>
 		<table border="1" align="center">
 			<tr>
 				<th>NO</th>
 				<th>Id Jenis</th>
 				<th>Nama Jenis</th>
 				<th>Kode Jenis</th>
 				<th>Keterangan</th>
 			</tr>

 			<?php 	
 				$nomor = 1;
 				while ($data = mysqli_fetch_array($hasil)) {
 					?> 
 						<tr>
 							<td><?php echo $nomor; ?></td>
 							<td><?php echo $data['id_jenis']; ?></td>
 							<td><?php echo $data['nama_jenis']; ?></td>
 							<td><?php echo $data['kode_jenis']; ?></td>
 							<td><?php echo $data['keterangan']; ?></td>
 						</tr>
 					<?php $nomor++;
 				}
 			 ?>

 		</table>
 	</center>
 	</div>
 	<script>
		window.print();
		setTimeout(window.print,200);
	</script>
 </body>
 </html>