<?php
	session_start();
	include("../conf/koneksi.php");
	/*define() digunakan untuk mendefinisikan sebuah konstanta. Konstanta seperti sebuah variabel, namun nilainya tidak berubah. Nama konstanta dan nilainya ditulis di dalam tanda kurung yang dipisahkan oleh tanda koma (,). define("INDEX",true); berarti INDEX adalah nama konstanta sedangkan true adalah nilainya*/
	define("INDEX",true);
?>

<html>
	<head>
		<title>Aplikasi Inventaris SMK Negeri 1 Denpasar</title>
		<link rel="stylesheet" href="../css/foll.css">
		<!—- ShareThis BEGIN -—>
		<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5e92fac04749a2001295a139&product=sticky-share-buttons"></script>
		<!—- ShareThis END -—>
		<!-- Start of  Zendesk Widget script -->
		<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=2b74eb45-c65c-4f7b-acfd-733b93e76535"> </script>
		<!-- End of  Zendesk Widget script -->
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
		<script type="text/javascript" src="../../js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="../../js/jquery-ui.js"></script>
	</body>
</html>