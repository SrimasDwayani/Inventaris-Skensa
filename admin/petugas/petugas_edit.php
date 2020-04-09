<?php 
	include_once("../../conf/koneksi.php");
	$id=$_GET['id'];

	$query="SELECT * FROM tb_petugas WHERE id_petugas='$id'";

	$hasil=mysqli_query($conn,$query);

?>
	<center>
		<h1>Ubah Data Petugas</h1>
		<form method="post" action="petugas_editproses.php">

		<?php while($data=mysqli_fetch_array($hasil)) { ?>

		<table>
			<tr>
				<td>Nama Petugas</td>
				<td><input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>"/></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" value="<?php echo $data['nip'] ?>"/> </td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>"/> </td>
			</tr>
			<tr>
				<td></td>
				<td>
				<input type="hidden" name="id" value="<?php echo $data['id_petugas'] ?>">
				<input type="submit" value="Ubah Data"></td>
			</tr>
		</table>
		<?php } ?>
		</form>
	</center>
	<br>
	