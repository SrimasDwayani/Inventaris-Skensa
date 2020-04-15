<?php 
	include_once("../../conf/koneksi.php");
	$id=$_GET['id'];

	$query="SELECT * FROM jenis WHERE id_jenis='$id'";

	$hasil=mysqli_query($conn,$query);

?>
<style type="text/css">
	body{
		background-color: #f1f1f1;
	}
	.edit_ruang{
		background-color: white;
		width: 400px;
		height: 270px;
		padding-top: 20px;
		margin-top: 200px;
		margin-left: 480px;
		box-shadow: 0 0 8px 3px black;
	}
	tr, td, input{
		font-size: 18px;
	}
	.edit_ruang input{
		margin-top: 3px;
	}
	.in{
		background-color: #368a88;
		color: white;
		padding: 6px;
	}
</style>
<body>
	<div class="edit_ruang">
	<center>
		<h1>Edit Data Jenis</h1>
		<form method="post" action="editproses_jenis.php">

		<?php
			while($data=mysqli_fetch_array($hasil)) { 
		?>

		<table>
			<tr>
				<td>Nama Ruang</td>
				<td><input type="text" name="nama_jenis" value="<?php echo $data['nama_jenis'] ?>"/></td>
			</tr>
			<tr>
				<td>Kode_ruang</td>
				<td><input type="number" name="kode_jenis" value="<?php echo $data['kode_jenis'] ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"/> </td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_jenis'] ?>">
					<input class="in" type="submit" value="Ubah Data">
				</td>
			</tr>
		</table>
		<?php } ?>
		</form>
		</div>
	</center>
</div>
</body>
<br>
	