<!DOCTYPE html>
<html>
<head>
	<title>Tambah Petugas</title>
	<link rel="stylesheet" type="text/css" href="../../css/file.css">
</head>
<body style="box-shadow: none;">
	<div class="crud_pet">
	<h2>Tambah Petugas Inventaris</h2>
	<form method="post" action="petugas_tambahproses.php">
		<table>
			<tr>
				<td>Nama Petugas</td>
				<td><input type="text" name="nama_petugas" placeholder="Ketik nama petugas"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip" placeholder="Ketik NIP petugas"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><select name="jurusan">
					<option value="mm">MM</option>
					<option value="rpl">RPL</option>
					<option value="tkj">TKJ</option>
					<option value="dpib">DPIB</option>
					<option value="bkp">BKP</option>
					<option value="av">AV</option>
					<option value="tl">TL</option>
					<option value="tp">TP</option>
					<option value="tkro">TKRO</option>
					<option value="tbsm">TBSM</option>
					<option value="pm">PM</option>
				</select></td>
			</tr>
			<br>
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