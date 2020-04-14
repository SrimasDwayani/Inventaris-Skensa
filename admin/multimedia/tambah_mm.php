<!DOCTYPE html>
<html>
<head>
	<title>Inventaris SMK Negeri 1 Denpasar</title>
	<link rel="stylesheet" type="text/css" href="../../css/doc.css">
</head>
<body style="box-shadow: none;">
	<div class="inventaris">
	<h2>Tambah Inventaris</h2>
	<form method="post" action="tambahproses_mm.php">
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
				<td><input type="number" name="id_jenis" placeholder="Masukkan id jenis" required=""></td>
			</tr>
			<tr>
				<td>Tanggal Register</td>
				<td><input type="date" name="tanggal_register" placeholder="Masukkan tanggal registrasi"></td>
			</tr>
			<tr>
				<td>Id Ruang</td>
				<td><input type="number" name="id_ruang" placeholder="Masukkan id ruang" required=""></td>
			</tr>
			<tr>
				<td>Kode Inventaris</td>
				<td><input type="text" name="kode_inventaris" placeholder="Masukkan kode inventaris" required=""></td>
			</tr>
			<tr>
				<td>Id Petugas</td>
				<td><input type="number" name="id_petugas" placeholder="Masukkan id petugas" required=""></td>
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