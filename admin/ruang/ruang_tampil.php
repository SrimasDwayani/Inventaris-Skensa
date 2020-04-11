<?php 
	include_once("../conf/koneksi.php");

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
 	<link rel="stylesheet" type="text/css" href="../../css/style.css">
 </head>
 <body>
 	<div class="ruang">
 	<center>
 		<h2>Pendataan Ruang Inventaris</h2>
 		<form action="" method="POST">
 			<input type="text" name="keywoard" placeholder="Cari -- Nama Ruang --" autofocus="">
 		<button name="cari" type="submit">Cari</button>
 		<a href="ruang/tambah_ruang.php">Tambah</a>
 		<a href="ruang/cetak.php" target="_blank">Print</a>
 		<a href="ruang/excel.php" target="_blank">Excel</a>
 		<a href="ruang/reset.php">Reset</a>
 		</form>
 		<table border="1" align="center">
 			<tr>
 				<th>NO</th>
 				<th>Id Ruang</th>
 				<th>Nama Ruang</th>
 				<th>Kode Ruang</th>
 				<th>Keterangan</th>
 				<th>Aksi</th>
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
 							<td>
 								<a class="a" href="ruang/edit_ruang.php">Edit</a> |
 								<a class="a" href="ruang/hapus_ruang.php <?php echo $data['id_jadwal'] ?>" onclick="return confirm(Apakah Anda yakin ingin menghapus <?php 	echo $data['nama_ruang']; ?> )">Hapus</a>
 							</td>
 						</tr>
 					<?php $nomor++;
 				}
 			 ?>

 		</table>
 	</center>
 	</div>
 </body>
 </html>