<?php 
	include_once("../conf/koneksi.php");

	$query= "SELECT * FROM level";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])) {
		$cari= $_POST['keywoard'];
		$hasil  = mysqli_query($conn, "SELECT * FROM level WHERE nama_level like '%$cari%' ");
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Inventaris SMK Negeri 1 Denpasar</title>
 	<link rel="stylesheet" type="text/css" href="../../css/style.css">
 </head>
 <body>
 	<div class="ruang">
 	<center>
 		<h2>Pendataan Level / Jurusan Inventaris</h2>
 		<?php 
			header("Content-type: application/vnd-ms-excel");
			header("Content-Disposition: attachment; filename=datajadwal.xls");
		?>
 		<table border="1" align="center">
 			<tr>
 				<th>NO</th>
 				<th>Id Level</th>
 				<th>Nama Level</th>
 			</tr>

 			<?php 	
 				$nomor = 1;
 				while ($data = mysqli_fetch_array($hasil)) {
 					?> 
 						<tr>
 							<td><?php echo $nomor; ?></td>
 							<td><?php echo $data['id_level']; ?></td>
 							<td><?php echo $data['nama_level']; ?></td>
 						</tr>
 					<?php $nomor++;
 				}
 			 ?>

 		</table>
 	</center>
 	</div>
 	<br>
 </body>
 </html>