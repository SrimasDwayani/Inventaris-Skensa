<?php 
	include_once("../../conf/koneksi.php");
	$id=$_GET['id'];

	$query="SELECT * FROM mm WHERE id_inventaris='$id'";

	$hasil=mysqli_query($conn,$query);

?>
<link rel="stylesheet" type="text/css" href="../../css/foll.css">
<body style="box-shadow: none;">
		<div class="inventaris">
		<h2>Edit Data Inventaris</h2>
		<form method="post" action="prosesedit_mm.php">

		<?php
			while($data=mysqli_fetch_array($hasil)) { 
		?>

		<table>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>"/> </td>
			</tr>
			<tr>
				<td>Kondisi</td>
				<td><input type="text" name="kondisi" value="<?php echo $data['kondisi'] ?>"> </td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"/> </td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah" value="<?php echo $data['jumlah'] ?>"/> </td>
			</tr>
			<tr>
				<td>Id Jenis</td>
				<td><input type="number" name="id_jenis" value="<?php echo $data['id_jenis'] ?>"/> </td>
			</tr>
			<tr>
				<td>Tanggal Register</td>
				<td><input type="date" name="tanggal_register" value="<?php echo $data['tanggal_register'] ?>"/> </td>
			</tr>
			<tr>
				<td>Id Ruang</td>
				<td><input type="number" name="id_ruang" value="<?php echo $data['id_ruang'] ?>"/> </td>
			</tr>
			<tr>
				<td>Kode Inventaris</td>
				<td><input type="text" name="kode_inventaris" value="<?php echo $data['kode_inventaris'] ?>"/> </td>
			</tr>
			<tr>
				<td>Id Petugas</td>
				<td><input type="number" name="id_petugas" value="<?php echo $data['id_petugas'] ?>"/> </td>
			</tr>
			<tr>
				<td></td>
				<td class="sub">
					<input type="hidden" name="id" value="<?php echo $data['id_inventaris'] ?>">
					<input type="submit" value="Ubah Inventaris">
				</td>
			</tr>
		</table>
		<?php } ?>
		</form>
	</div>
</body>