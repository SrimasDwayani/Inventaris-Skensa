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
 	<link rel="stylesheet" type="text/css" href="../../css/ini.css">
 </head>
 <body>
 	<div class="ruang">
 	<center>
 		<h2>Pendataan Level / Jurusan Inventaris</h2>
 		<form action="" method="POST">
 			<input type="text" name="keywoard" placeholder="Cari -- Nama Level --" autofocus="">
 		<button name="cari" type="submit">Cari</button>
 		<a href="level/level_tambah.php">Tambah</a>
 		<a href="level/level_cetak.php" target="_blank">Print</a>
 		<a href="level/level_excel.php" target="_blank">Excel</a>
 		<a href="level/reset.php">Reset</a>
 		</form>
 		<table border="1" align="center">
 			<tr>
 				<th>NO</th>
 				<th>Id Level</th>
 				<th>Nama Level</th>
 				<th>Aksi</th>
 			</tr>

 			<?php 	
 				$nomor = 1;
 				while ($data = mysqli_fetch_array($hasil)) {
 					?> 
 						<tr>
 							<td><?php echo $nomor; ?></td>
 							<td><?php echo $data['id_level']; ?></td>
 							<td><?php echo $data['nama_level']; ?></td>
 							<td>
 							<a class="a" href="level/level_edit.php?id= <?php echo $data['id_level']; ?>">Edit</a>  |
 							<a class="a" href="level/level_hapus.php?id= <?php echo $data['id_level'] ?>" onclick = "return confirm(Apakah Anda yakin ingin menghapus <?php echo $data['nama_level']; ?>)">Hapus</a>
 						</td>
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