<?php 
	include_once("../conf/koneksi.php");

	$query="SELECT * FROM tb_petugas";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])){
		$cari = $_POST['keywoard'];
		$hasil = mysqli_query($conn, "SELECT * FROM tb_petugas WHERE nama_petugas like '%$cari%'");
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Aplikasi Inventaris SMKN 1 Denpasar</title>
 	<link rel="stylesheet" type="text/css" href="../../css/file.css">
 </head>
 <body>
 	<div class="petugas">
 	<h2>Petugas Inventaris SMKN 1 Denpasar</h2>
 	<form method="POST" action="">
 		<input type="text" name="keywoard" placeholder="Cari -- Nama Petugas --" autofocus="">
 		<button name="cari" type="submit">Cari</button>
 		<a href="petugas/tambah_petugas.php">Tambah</a>
 		<a href="petugas/cetak.php" target="_blank">Print</a>
 		<a href="petugas_excel.php">Excel</a>
 		<a href="petugas_reset.php">Reset</a>
 	</form>
 	<table border="1" align="center">
 		<tr>
 			<th>NO</th>
 			<th>Id Petugas</th>
 			<th>Nama Petugas</th>
 			<th>NIP</th>
 			<th>Jurusan</th>
 			<th>Aksi</th>
 		</tr>

 		<?php 
 			$nomor = 1;
 			while($data = mysqli_fetch_array($hasil)){
 				?>
 					<tr>
 						<td><?php echo $nomor; ?></td>
 						<td><?php echo $data['id_petugas']; ?></td>
 						<td><?php echo $data['nama_petugas']; ?></td>
 						<td><?php echo $data['nip']; ?></td>
 						<td><?php echo $data['jurusan']; ?></td>
 					</tr>
 			<?php $nomor++; } ?>
 	</table>
 	</div>
 	<br>
 </body>
 </html>