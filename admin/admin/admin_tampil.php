<?php 
	include_once("../conf/koneksi.php");

	$query= "SELECT admin.id_admin, admin.nama_admin, admin.username, admin.nip, admin.id_level, level.id_level, level.nama_level FROM admin, level WHERE admin.id_level = level.id_level ";

	$hasil = mysqli_query($conn, $query);
	if (isset($_POST['cari'])) {
		$cari= $_POST['keywoard'];
		$hasil  = mysqli_query($conn, "SELECT admin.id_admin, admin.nama_admin, admin.username, admin.nip, admin.id_level, level.id_level, level.nama_level FROM admin, level WHERE admin.id_level = level.id_level AND admin.nama_admin like '%$cari%' ");
	}else{
		$hasil = mysqli_query($conn, $query);
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
 		<h2>Pendataan Admin Inventaris</h2>
 		<form action="" method="POST">
 			<input type="text" name="keywoard" placeholder="Cari -- Nama Admin --" autofocus="">
 		<button name="cari" type="submit">Cari</button>
 		<a href="admin/admin_tambah.php">Tambah</a>
 		<a href="admin/admin_cetak.php" target="_blank">Print</a>
 		<a href="admin/admin_excel.php" target="_blank">Excel</a>
 		</form>
 		<table border="1" align="center">
 			<tr>
 				<th>NO</th>
 				<th>Id Admin</th>
 				<th>Nama Admin</th>
 				<th>Username</th>
 				<th>NIP</th>
 				<th>Level</th>
 				<th>Aksi</th>
 			</tr>

 			<?php 	
 				$nomor = 1;
 				while ($data = mysqli_fetch_array($hasil)) {
 					?> 
 						<tr>
 							<td><?php echo $nomor; ?></td>
 							<td><?php echo $data['id_admin']; ?></td>
 							<td><?php echo $data['nama_admin']; ?></td>
 							<td><?php echo $data['username']; ?></td>
 							<td><?php echo $data['nip']; ?></td>
 							<td><?php echo $data['nama_level']; ?></td>
 							<td>
 							<a class="a" href="admin/admin_edit.php?id= <?php echo $data['id_admin']; ?>">Edit Data</a>
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