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
 	<link rel="stylesheet" type="text/css" href="../../css/foll.css">
 </head>
 <body>
 	<div class="ruang">
 	<center>
 		<h2>Jenis Barang Inventaris</h2>
 		<form action="" method="POST">
 			<input type="text" name="keywoard" placeholder="Cari -- Nama Jenis --" autofocus="">
 		<button name="cari" type="submit">Cari</button>
 		<a href="jenis/tambah_jenis.php">Tambah</a>
 		<a href="jenis/cetak.php" target="_blank">Print</a>
 		<a href="jenis/print.php" target="_blank">Excel</a>
 		<a href="jenis/reset.php">Reset</a>
 		</form>
 		<table border="1" align="center">
 			<tr>
 				<th>NO</th>
 				<th>Id Jenis</th>
 				<th>Nama Jenis</th>
 				<th>Kode Jenis</th>
 				<th>Keterangan</th>
 				<th>Aksi</th>
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
 							<td>
 							<a class="a" href="jenis/edit_jenis.php?id= <?php echo $data['id_jenis']; ?>">Edit</a>  |
 							<a class="a" href="jenis/hapus_jenis.php?id= <?php echo $data['id_jenis'] ?>" onclick = "return confirm(Apakah Anda yakin ingin menghapus <?php echo $data['nama_jenis']; ?>)">Hapus</a>
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