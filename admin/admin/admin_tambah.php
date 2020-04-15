<!DOCTYPE html>
<html>
<head>
	<title>Inventaris SMK Negeri 1 Denpasar</title>
	<link rel="stylesheet" type="text/css" href="../../css/foll.css">
</head>
<body style="box-shadow: none;">
	<div class="crud_pet">
	<h2>Tambah Ruangan Inventaris</h2>
	<form method="post" action="admin_tambahproses.php">
		<table>
			<tr>
				<td>Nama Admin</td>
				<td><input type="text" name="nama_admin" placeholder="Masukkan nama admin" required=""></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Masukkan username" required=""></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" placeholder="Masukkan NIP admin" required=""></td>
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
				<td class="sub"><input type="submit" value="Tambah Admin"></td>
			</tr>
		</table>
	</form>
	</div>
	<br>
</body>
</html>