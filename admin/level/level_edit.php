<?php 
	include_once("../../conf/koneksi.php");
	$id=$_GET['id'];

	$query="SELECT * FROM level WHERE id_level='$id'";

	$hasil=mysqli_query($conn,$query);

?>
<style type="text/css">
	body{
		background-color: #f1f1f1;
	}
	.edit_level{
		background-color: white;
		width: 400px;
		height: 200px;
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
		margin-top: 20px;
	}
</style>
<body>
	<div class="edit_level">
	<center>
		<h1>Ubah Level / Jurusan</h1>
		<form method="post" action="level_editproses.php">

		<?php
			while($data=mysqli_fetch_array($hasil)) { 
		?>

		<table>
			<tr>
				<td>Nama Level</td>
				<td><input type="text" name="nama_level" value="<?php echo $data['nama_level'] ?>"/></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_level'] ?>">
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
	