<?php 
	include_once("../../../conf/koneksi.php");

	$query= "SELECT pm.id_inventaris, pm.nama_barang, pm.kondisi, pm.keterangan, pm.jumlah, pm.id_jenis, jenis.nama_jenis, pm.tanggal_register, pm.id_ruang, ruang.nama_ruang, pm.kode_inventaris, pm.id_petugas, tb_petugas.nama_petugas FROM pm, jenis, ruang, tb_petugas WHERE pm.id_jenis = jenis.id_jenis AND pm.id_ruang = ruang.id_ruang AND pm.id_petugas = tb_petugas.id_petugas";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])) {
		$cari= $_POST['keywoard'];
		$hasil  = mysqli_query($conn, "SELECT pm.id_inventaris, pm.nama_barang, pm.kondisi, pm.keterangan, pm.jumlah, pm.id_jenis, jenis.nama_jenis, pm.tanggal_register, pm.id_ruang, ruang.nama_ruang, pm.kode_inventaris, pm.id_petugas, tb_petugas.nama_petugas FROM pm, jenis, ruang, tb_petugas WHERE pm.id_jenis = jenis.id_jenis AND pm.id_ruang = ruang.id_ruang AND pm.id_petugas = tb_petugas.id_petugas AND pm.nama_barang like '%$cari%' ");
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
 		<a href="tambah_pm.php">Tambah</a>
 		<a href="print_pm.php" target="_blank">Print</a>
 		<a href="excel_pm.php" target="_blank">Excel</a>
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
	 							<a class="a" href="edit_pm.php?id= <?php echo $data['id_inventaris']; ?>"><i class="fas fa-edit"></i></a>  
	 							<a class="a" href="hapus_pm.php?id= <?php echo $data['id_inventaris'] ?>" onclick = "return confirm(Apakah Anda yakin ingin menghapus <?php echo $data['nama_barang']; ?>)"><i class="fas fa-trash-alt"></i></a>
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