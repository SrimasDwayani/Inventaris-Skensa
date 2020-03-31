<?php
	session_start();
	include("../conf/koneksi.php");
	/*define() digunakan untuk mendefinisikan sebuah konstanta. Konstanta seperti sebuah variabel, namun nilainya tidak berubah. Nama konstanta dan nilainya ditulis di dalam tanda kurung yang dipisahkan oleh tanda koma (,). define("INDEX",true); berarti INDEX adalah nama konstanta sedangkan true adalah nilainya*/
	define("INDEX",true);
?>

<html>
	<head>
		<title>Aplikasi Inventaris SMK Negeri 1 Denpasar</title>
		<link rel="stylesheet" href="../css/file.css">
	</head>
	<body>
		<div id="container">
			<div id="header">
				<?php include("header.php"); ?>
			</div>

			<div id="menu">
				<?php include("menu.php"); ?>
			<div>

			<div id="tambah">
				<div id="taskbar">
					<?php include("taskbar.php") ?>
				</div>
				<div id="content">
					<?php include("konten.php"); ?>
				</div>
			</div>

			<div id="footer">
				<p>Copyright &copy; INVENTARIS SMK Negeri 1 Denpasar</p> 
			</div>
		</div>
	</body>
</html>