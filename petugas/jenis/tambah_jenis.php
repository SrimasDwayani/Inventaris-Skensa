<!DOCTYPE html>
<html>
<head>
	<title>Inventaris SMK Negeri 1 Denpasar</title>
	<link rel="stylesheet" type="text/css" href="../../css/foll.css">
</head>
<body style="box-shadow: none;">
	<div class="crud_pet">
	<h2>Tambah Ruangan Inventaris</h2>
	<form method="post" action="tambahproses_jenis.php">
		<table>
			<tr>
				<td>Nama Jenis</td>
				<td><input type="text" name="nama_jenis" placeholder="Masukkan nama jenis" required=""></td>
			</tr>
			<tr>
				<td>Kode Jenis</td>
				<td><input type="number" name="kode_jenis" placeholder="Masukkan kode jenis" required=""></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" placeholder="Masukkan keterangan" required=""></td>
			</tr>
			<tr>
				<td></td>
				<td class="sub"><input type="submit" value="Tambah Jenis"></td>
			</tr>
		</table>
	</form>
	</div>
	<br>
</body>
</html>