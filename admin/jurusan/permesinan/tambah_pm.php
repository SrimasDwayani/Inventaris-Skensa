<!DOCTYPE html>
<html>
<head>
	<title>Inventaris SMK Negeri 1 Denpasar</title>
	<link rel="stylesheet" type="text/css" href="../../../css/foll.css">
</head>
<body style="box-shadow: none;">
	<div class="inventaris">
	<h2>Tambah Inventaris</h2>
	<form method="post" action="tambahproses_pm.php">
		<table>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang" placeholder="Masukkan nama barang" required=""></td>
			</tr>
			<tr>
				<td>Kondisi</td>
				<td><input type="text" name="kondisi" placeholder="Masukkan kondisi barang" required=""></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" placeholder="Masukkan keterangan" required=""></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah" placeholder="Masukkan jumlah barang" required=""></td>
			</tr>
			<tr>
				<td>Id Jenis</td>
				<td>
					<select name="id_jenis">
					<?php
						include '../../conf/koneksi.php';
						$query="SELECT * FROM jenis";
						$view = mysqli_query($conn,$query);
						while ($data = mysqli_fetch_array($view)){
							?> 
								<option value="<?php echo $data['id_jenis']?>"><?php echo $data['nama_jenis']?></option>
							<?php
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Register</td>
				<td><input type="date" name="tanggal_register" placeholder="Masukkan tanggal registrasi"></td>
			</tr>
			<tr>
				<td>Id Ruang</td>
				<td>
					<select name="id_ruang">
					<?php
						include '../../conf/koneksi.php';
						$query="SELECT * FROM ruang";
						$view = mysqli_query($conn,$query);
						while ($data = mysqli_fetch_array($view)){
							?> 
								<option value="<?php echo $data['id_ruang']?>"><?php echo $data['nama_ruang']?></option>
							<?php
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kode Inventaris</td>
				<td><input type="text" name="kode_inventaris" placeholder="Masukkan kode inventaris" required=""></td>
			</tr>
			<tr>
				<td>Id Petugas</td>
				<td>
					<select name="id_petugas">
					<?php
						include '../../conf/koneksi.php';
						$query="SELECT * FROM tb_petugas";
						$view = mysqli_query($conn,$query);
						while ($data = mysqli_fetch_array($view)){
							?> 
								<option value="<?php echo $data['id_petugas']?>"><?php echo $data['nama_petugas']?></option>
							<?php
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td class="sub"><input type="submit" value="Tambah Inventaris"></td>
			</tr>
		</table>
	</form>
	</div>
	<br>
</body>
</html>