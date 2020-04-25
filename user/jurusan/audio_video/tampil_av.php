<?php 
	include_once("../../../conf/koneksi.php");

	$query= "SELECT av.id_inventaris, av.nama_barang, av.kondisi, av.keterangan, av.jumlah, av.id_jenis, jenis.nama_jenis, av.tanggal_register, av.id_ruang, ruang.nama_ruang, av.kode_inventaris, av.id_petugas, tb_petugas.nama_petugas FROM av, jenis, ruang, tb_petugas WHERE av.id_jenis = jenis.id_jenis AND av.id_ruang = ruang.id_ruang AND av.id_petugas = tb_petugas.id_petugas";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])) {
		$cari= $_POST['keywoard'];
		$hasil  = mysqli_query($conn, "SELECT av.id_inventaris, av.nama_barang, av.kondisi, av.keterangan, av.jumlah, av.id_jenis, jenis.nama_jenis, av.tanggal_register, av.id_ruang, ruang.nama_ruang, av.kode_inventaris, av.id_petugas, tb_petugas.nama_petugas FROM av, jenis, ruang, tb_petugas WHERE av.id_jenis = jenis.id_jenis AND av.id_ruang = ruang.id_ruang AND av.id_petugas = tb_petugas.id_petugas AND av.nama_barang like '%$cari%' ");
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
 		<a href="print_av.php" target="_blank">Print</a>
 		<a href="excel_av.php" target="_blank">Excel</a>
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
 						</tr>
 					<?php $nomor++; 
 				}
 			 ?>
 		</table>
 	</center>
 	</div>
 </body>
 </html>