<?php 
	include_once("../../conf/koneksi.php");

	$query= "SELECT * FROM ruang";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])) {
		$cari= $_POST['keywoard'];
		$hasil  = mysqli_query($conn, "SELECT * FROM ruang WHERE nama_ruang like '%$cari%' ");
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Inventaris SMK Negeri 1 Denpasar</title>
 	<link rel="stylesheet" type="text/css" href="../../css/file.css">
 </head>
 <body style="box-shadow: none;">
 	<div class="ruang">
 	<center>
 		<h2>Pendataan Ruang Inventaris</h2>
 		<table border="1" align="center">
 			<tr>
 				<th>NO</th>
 				<th>Id Ruang</th>
 				<th>Nama Ruang</th>
 				<th>Kode Ruang</th>
 				<th>Keterangan</th>
 			</tr>

 			<?php 	
 				$nomor = 1;
 				while ($data = mysqli_fetch_array($hasil)) {
 					?> 
 						<tr>
 							<td><?php echo $nomor; ?></td>
 							<td><?php echo $data['id_ruang']; ?></td>
 							<td><?php echo $data['nama_ruang']; ?></td>
 							<td><?php echo $data['kode_ruang']; ?></td>
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