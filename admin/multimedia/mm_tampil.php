<?php 
	include_once("../../conf/koneksi.php");

	$query= "SELECT * FROM mm";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])) {
		$cari= $_POST['keywoard'];
		$hasil  = mysqli_query($conn, "SELECT * FROM mm WHERE nama_barang like '%$cari%' ");
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Inventaris SMK Negeri 1 Denpasar</title>
 	<link rel="stylesheet" type="text/css" href="../../css/doc.css">
 </head>
 <body style="box-shadow: none;">
 	<div class="inven_data">
 	<center>
 		<h2>Inventaris Barang Jurusan Multimedia</h2>
 		<form action="" method="POST">
 			<input type="text" name="keywoard" placeholder="Cari -- Nama Barang --" autofocus="">
 		<button name="cari" type="submit">Cari</button>
 		<a href="tambah_mm.php">Tambah</a>
 		<a href="cetak_mm.php" target="_blank">Print</a>
 		<a href="excel_mm.php" target="_blank">Excel</a>
 		<a href="reset.php">Reset</a>
 		</form>
 		<table border="1" align="center">
 			<tr>
 				<th>NO</th>
 				<th>Id Inventaris</th>
 				<th>Nama Barang</th>
 				<th>Kondisi</th>
 				<th>Keterangan</th>
 				<th>Jumlah</th>
 				<th>Id Jenis</th>
 				<th>Tanggal Register</th>
 				<th>Id Ruang</th>
 				<th>Kode Inventaris</th>
 				<th>Id_petugas</th>
 				<th>Aksi</th>
 			</tr>

 			<?php 	
 				$nomor = 1;
 				while ($data = mysqli_fetch_array($hasil)) {
 					?> 
 						<tr>
 							<td><?php echo $nomor; ?></td>
 							<td><?php echo $data['id_inventaris']; ?></td>
 							<td><?php echo $data['nama_barang']; ?></td>
 							<td><?php echo $data['kondisi']; ?></td>
 							<td><?php echo $data['keterangan']; ?></td>
 							<td><?php echo $data['jumlah']; ?></td>
 							<td><?php echo $data['id_jenis']; ?></td>
 							<td><?php echo $data['tanggal_register']; ?></td>
 							<td><?php echo $data['id_ruang']; ?></td>
 							<td><?php echo $data['kode_inventaris']; ?></td>
 							<td><?php echo $data['id_petugas']; ?></td>
 							<td>
 							<a class="a" href="mm/edit_mm.php?id= <?php echo $data['id_barang']; ?>">Edit</a>  |
 							<a class="a" href="mm/hapus_mm.php?id= <?php echo $data['id_barang'] ?>" onclick = "return confirm(Apakah Anda yakin ingin menghapus <?php echo $data['nama_barang']; ?>)">Hapus</a>
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