<?php
	if (isset($_GET['tampil'])) $tampil = $_GET['tampil'];
	else $tampil = "menu";

	if ($tampil == "menu")
		include ("menu/menu_tampil.php");

	elseif ($tampil == "peminjaman")
		include ("peminjaman/peminjaman_tampil.php");

	elseif ($tampil == "pesan")
		include ("pesan/pesan_tampil.php");
	elseif ($tampil == "pesan_balas")
		include ("pesan/pesan_balas.php");
	elseif ($tampil == "pesan_balasproses")
		include("pesan/pesan_balasproses.php");
	elseif ($tampil == "pesan_hapus")
		include ("pesan/pesan_hapus.php");

	elseif ($tampil == "ganti_password")
		include ("user/ganti_password.php");
	elseif ($tampil =="ganti_password_proses")
		include ("user/ganti_password_proses.php");

	else echo "Konten tidak ada";
?>