<?php 
	include_once("../../conf/koneksi.php");
	$id=$_GET['id'];

	$query="SELECT * FROM admin WHERE id_admin='$id'";

	$hasil=mysqli_query($conn,$query);

?>
<style type="text/css">
	body{
		background-color: #f1f1f1;
	}
	.edit_admin{
		background-color: white;
		width: 400px;
		height: 300px;
		padding-top: 20px;
		margin-top: 170px;
		margin-left: 490px;
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
	<div class="edit_admin">
	<center>
		<h1>Edit Data Admin</h1>
		<form method="post" action="admin_editproses.php">

		<?php
			while($data=mysqli_fetch_array($hasil)) { 
		?>

		<table>
			<tr>
				<td>Nama Admin</td>
				<td><input type="text" name="nama_admin" value="<?php echo $data['nama_admin'] ?>"/></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" value="<?php echo $data['nip'] ?>"/> </td>
			</tr>
			<tr>
				<td>Level</td>
				<td>
					<select name="id_level">
					<?php
						include '../../conf/koneksi.php';
						$query1="SELECT * FROM Level";
						$view = mysqli_query($conn,$query1);
						while ($data1 = mysqli_fetch_array($view)){
							?> 
								<option value="<?php echo $data1['id_level'];?>"><?php echo $data1['nama_level'];?></option>
							<?php
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_admin'] ?>">
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
	