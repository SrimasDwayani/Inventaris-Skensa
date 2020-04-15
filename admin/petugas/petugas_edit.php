<?php 
	include_once("../../conf/koneksi.php");
	$id=$_GET['id'];

	$query="SELECT * FROM tb_petugas WHERE id_petugas='$id'";

	$hasil=mysqli_query($conn,$query);

?>
<link rel="stylesheet" type="text/css" href="../../css/foll.css">
<body style="box-shadow: none;">
	<div class="crud_pet">
	<center>
		<form method="post" action="petugas_editproses.php" enctype="multipart/form-data">

		<?php
			while($data=mysqli_fetch_array($hasil)) { 
		?>

		<h2>Ubah Data Petugas Inventaris</h2>
		<table>
			<tr>
				<td>Nama Petugas</td>
				<td><input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>"/></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="Foto"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" value="<?php echo $data['nip'] ?>"/> </td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type="number" name="notelp" value="<?php echo $data['notelp'] ?>"/> </td>
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
				<td class="sub">
					<input type="hidden" name="id" value="<?php echo $data['id_petugas'] ?>">
					<input type="submit" value="Ubah Data">
				</td>
			</tr>
		</table>
		<?php } ?>
		</form>
		</div>
	</center>
</div>
</body>