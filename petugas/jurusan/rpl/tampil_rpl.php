<?php 
	include_once("../../../conf/koneksi.php");

	$query= "SELECT rpl.id_inventaris, rpl.nama_barang, rpl.kondisi, rpl.keterangan, rpl.jumlah, rpl.id_jenis, jenis.nama_jenis, rpl.tanggal_register, rpl.id_ruang, ruang.nama_ruang, rpl.kode_inventaris, rpl.id_petugas, tb_petugas.nama_petugas FROM rpl, jenis, ruang, tb_petugas WHERE rpl.id_jenis = jenis.id_jenis AND rpl.id_ruang = ruang.id_ruang AND rpl.id_petugas = tb_petugas.id_petugas";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])) {
		$cari= $_POST['keywoard'];
		$hasil  = mysqli_query($conn, "SELECT rpl.id_inventaris, rpl.nama_barang, rpl.kondisi, rpl.keterangan, rpl.jumlah, rpl.id_jenis, jenis.nama_jenis, rpl.tanggal_register, rpl.id_ruang, ruang.nama_ruang, rpl.kode_inventaris, rpl.id_petugas, tb_petugas.nama_petugas FROM rpl, jenis, ruang, tb_petugas WHERE rpl.id_jenis = jenis.id_jenis AND rpl.id_ruang = ruang.id_ruang AND rpl.id_petugas = tb_petugas.id_petugas AND rpl.nama_barang like '%$cari%' ");
	}else{
		$hasil = mysqli_query($conn,$query);
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Inventaris SMK Negeri 1 Denpasar</title>
 	<link rel="stylesheet" type="text/css" href="../../../css/foll.css">
 </head>
 <body style="box-shadow: none; background-color: white;">
 	<div class="inven_data">
 	<center>
 		<h2>Inventaris Barang Jurusan Multimedia</h2>
 		<form action="" method="POST">
 			<input type="text" name="keywoard" placeholder="Cari -- Nama Barang --" autofocus="">
 		<button name="cari" type="submit">Cari</button>
 		<a href="tambah_rpl.php">Tambah</a>
 		<a href="print_rpl.php" target="_blank">Print</a>
 		<a href="excel_rpl.php" target="_blank">Excel</a>
 		<a href="reset.php">Reset</a>
 		<a href="../../home.php">Kembali Ke Home</a>
 		</form>
 		<table border="1" align="center">
 			<tr>
 				<th>NO</th>
 				<th>Id Inventaris</th>
 				<th>Nama Barang</th>
 				<th>Kondisi</th>
 				<th>Keterangan</th>
 				<th>Jumlah</th>
 				<th>Jenis</th>
 				<th>Tanggal Register</th>
 				<th>Ruang</th>
 				<th>Kode Inventaris</th>
 				<th>Petugas</th>
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
 							<td><?php echo $data['nama_jenis']; ?></td>
 							<td><?php echo $data['tanggal_register']; ?></td>
 							<td><?php echo $data['nama_ruang']; ?></td>
 							<td><?php echo $data['kode_inventaris']; ?></td>
 							<td><?php echo $data['nama_petugas']; ?></td>
 							<td>
	 							<a class="a" href="edit_rpl.php?id= <?php echo $data['id_inventaris']; ?>"><i class="fas fa-edit"></i></a>  
	 							<a class="a" href="hapus_rpl.php?id= <?php echo $data['id_inventaris'] ?>" onclick = "return confirm(Apakah Anda yakin ingin menghapus <?php echo $data['nama_barang']; ?>)"><i class="fas fa-trash-alt"></i></a>
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