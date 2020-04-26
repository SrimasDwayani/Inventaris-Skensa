<?php 
	include_once("../../../conf/koneksi.php");

	$query= "SELECT bkp.id_inventaris, bkp.nama_barang, bkp.kondisi, bkp.keterangan, bkp.jumlah, bkp.id_jenis, jenis.nama_jenis, bkp.tanggal_register, bkp.id_ruang, ruang.nama_ruang, bkp.kode_inventaris, bkp.id_petugas, tb_petugas.nama_petugas FROM bkp, jenis, ruang, tb_petugas WHERE bkp.id_jenis = jenis.id_jenis AND bkp.id_ruang = ruang.id_ruang AND bkp.id_petugas = tb_petugas.id_petugas";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])) {
		$cari= $_POST['keywoard'];
		$hasil  = mysqli_query($conn, "SELECT bkp.id_inventaris, bkp.nama_barang, bkp.kondisi, bkp.keterangan, bkp.jumlah, bkp.id_jenis, jenis.nama_jenis, bkp.tanggal_register, bkp.id_ruang, ruang.nama_ruang, bkp.kode_inventaris, bkp.id_petugas, tb_petugas.nama_petugas FROM bkp, jenis, ruang, tb_petugas WHERE bkp.id_jenis = jenis.id_jenis AND bkp.id_ruang = ruang.id_ruang AND bkp.id_petugas = tb_petugas.id_petugas AND bkp.nama_barang like '%$cari%' ");
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
 	<?php include("../header/header.php"); ?>
 	<div class="inven_data">
 	<center>
 		<h2>Inventaris Barang Jurusan Multimedia</h2>
 		<form action="" method="POST">
 			<input type="text" name="keywoard" placeholder="Cari -- Nama Barang --" autofocus="">
 		<button name="cari" type="submit">Cari</button>
 		<a href="tambah_bkp.php">Tambah</a>
 		<a href="print_bkp.php" target="_blank">Print</a>
 		<a href="excel_bkp.php" target="_blank">Excel</a>
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
	 							<a class="a" href="edit_bkp.php?id= <?php echo $data['id_inventaris']; ?>"><i class="fas fa-edit"></i></a>  
	 							<a class="a" href="hapus_bkp.php?id= <?php echo $data['id_inventaris'] ?>" onclick = "return confirm(Apakah Anda yakin ingin menghapus <?php echo $data['nama_barang']; ?>)"><i class="fas fa-trash-alt"></i></a>
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