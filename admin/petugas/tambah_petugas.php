<!DOCTYPE html>
<html>
<head>
	<title>Tambah Petugas</title>
	<link rel="stylesheet" type="text/css" href="../../css/foll.css">
</head>
<body style="box-shadow: none;">
	<div class="crud_pet">
	<form method="post" action="petugas_tambahproses.php" enctype="multipart/form-data">
		<h2>Tambah Petugas Inventaris</h2>
		<table>
			<tr>
				<td>Nama Petugas</td>
				<td><input type="text" name="nama_petugas" placeholder="Masukkan nama petugas" required=""></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="Foto"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" placeholder="Masukkan NIP petugas" required=""></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type="number" name="notelp" placeholder="Masukkan No Telepon" required=""></td>
			</tr>
			<tr>
				<td>Level</td>
				<td>
					<select name="id_level">
					<?php
						include '../../conf/koneksi.php';
						$query="SELECT * FROM level";
						$view = mysqli_query($conn,$query);
						while ($data = mysqli_fetch_array($view)){
							?> 
								<option value="<?php echo $data['id_level']?>"><?php echo $data['nama_level']?></option>
							<?php
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td class="sub"><input type="submit" value="Tambah Petugas"></td>
			</tr>
		</table>
	</form>
	</div>
	<br>
</body>
</html>