<?php 
	include_once("../../conf/koneksi.php");

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
 	<title>Data Petugas Inventaris SKENSA</title>
 </head>
 <body>
 	<div class="petugas">
 	<h2 style="text-align: center;">Petugas Inventaris SMKN 1 Denpasar</h2>
 	<table border="1" align="center">
 		<tr>
 			<th>NO</th>
 			<th>Id Petugas</th>
 			<th>Nama Petugas</th>
 			<th>NIP</th>
 			<th>Jurusan</th>
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
 	<script>
		window.print();
		setTimeout(window.print,200);
	</script>
 </body>
 </html>