<?php 
	include_once("../conf/koneksi.php");

	$query="SELECT tb_petugas.id_petugas, tb_petugas.nama_petugas, tb_petugas.foto, tb_petugas.nip, tb_petugas.notelp, level.id_level, level.nama_level FROM tb_petugas, level WHERE tb_petugas.id_level = level.id_level ";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])){
		$cari = $_POST['keywoard'];
		$hasil = mysqli_query($conn, "SELECT tb_petugas.id_petugas, tb_petugas.nama_petugas, tb_petugas.foto, tb_petugas.nip, tb_petugas.notelp, level.id_level, level.nama_level FROM tb_petugas, level WHERE tb_petugas.id_level = level.id_level AND tb_petugas.nama_petugas like '%$cari%' ");
	}else{
		$hasil = mysqli_query($conn,$query);
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Aplikasi Inventaris SMKN 1 Denpasar</title>
 	<link rel="stylesheet" type="text/css" href="../../css/doc.css">
 </head>
 <body>
 	<div class="petugas">
 	<h2>Petugas Inventaris SMKN 1 Denpasar</h2>
 	<form method="POST" action="">
 		<input type="text" name="keywoard" placeholder="Cari -- Nama Petugas --" autofocus="">
 		<button name="cari" type="submit">Cari</button>
 		<a href="petugas/tambah_petugas.php">Tambah</a>
 		<a href="petugas/cetak.php" target="_blank">Print</a>
 		<a href="petugas/excel.php" target="_blank">Excel</a>
 		<a href="petugas/reset.php">Reset</a>
 	</form>
 	<table border="1" align="center">
 		<tr>
 			<th>NO</th>
 			<th>Id Petugas</th>
 			<th>Nama Petugas</th>
 			<th>Foto</th>
 			<th>NIP</th>
 			<th>No. Telepon</th>
 			<th>Level</th>
 			<th>Aksi</th>
 		</tr>

 		<?php 
			$nomor=1;
			while($data = mysqli_fetch_array($hasil)){ 
		?> 
 					<tr>
 						<td><?php echo $nomor; ?></td>
 						<td><?php echo $data['id_petugas']; ?></td>
 						<td><?php echo $data['nama_petugas']; ?></td>
						<td><?php echo "<img src='foto/". $data['foto']."' width='100' height='120' "; ?></td>
 						<td><?php echo $data['nip']; ?></td>
 						<td><?php echo $data['notelp']; ?></td>
 						<td><?php echo $data['nama_level']; ?></td>
 						<td>
 							<a class="aksi" href="petugas/petugas_edit.php?id= <?php echo $data['id_petugas']; ?> ">Edit</a>  |
 							<a class="aksi" href="petugas/petugas_hapus.php?id= <?php echo $data['id_petugas']; ?>" onclick = "return confirm(Apakah Anda yakin ingin menghapus <?php echo $data['nama_petugas']; ?>)">Hapus</a>
 						</td>
 					</tr>
 			<?php $nomor++; } ?>
 	</table>
 	</div>
 	<br>
 </body>
 </html>