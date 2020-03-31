<?php
	if (isset($_GET['tampil'])) $tampil = $_GET['tampil'];
	else $tampil = "beranda";

	if ($tampil == "beranda")		include ("beranda.php");

	elseif ($tampil == "menu")
		include ("menu/menu_tampil.php");
	elseif ($tampil == "menu_tambah") 
		include ("menu/menu_tambah.php");
	elseif ($tampil == "menu_tambahproses")
		include ("menu/menu_tambahproses.php");
	elseif ($tampil == "menu_edit")
		include ("menu/menu_edit.php");
	elseif ($tampil == "menu_editproses")
		include ("menu/menu_editproses.php");
	elseif ($tampil == "menu_hapus")
		include ("menu/menu_hapus.php");

	elseif ($tampil == "petugas")
		include ("petugas/petugas_tampil.php");
	elseif ($tampil == "petugas_tambah")
		include ("petugas/petugas_tambah.php");
	elseif ($tampil == "petugas_tambahproses")
		include ("petugas/petugas_tambahproses");
	elseif ($tampil == "petugas_edit")
		include ("petugas/petugas_edit.php");
	elseif ($tampil == "petugas_editproses")
		include ("petugas/petugas_editproses.php");
	elseif ($tampil == "petugas_hapus")
		include ("petugas/petugas_hapus.php");

	elseif ($tampil == "peminjaman")
		include ("peminjaman/peminjaman_tampil.php");
	elseif ($tampil== "peminjaman_tambah")
		include ("peminjaman/peminjaman_tambah.php");
	elseif ($tampil == "peminjaman_tambahproses")
		include ("peminjaman/peminjaman_tambahproses.php");
	elseif ($tampil == "peminjaman_edit")
		include ("peminjaman/peminjaman_edit.php");
	elseif ($tampil == "peminjaman_editproses")
		include ("peminjaman/peminjaman_editproses.php");
	elseif ($tampil == "peminjaman_hapus")
		include ("peminjaman/peminjaman_hapus.php");

	elseif ($tampil == "pengembalian")
		include ("pengembalian/pengembalian_tampil.php");
	elseif ($tampil == "pengembalian_tambah")
		include ("pengembalian/pengembalian_tambah.php");
	elseif ($tampil == "pengembalian_tambahproses")
		include ("pengembalian/pengembalian_tambahproses.php");
	elseif ($tampil == "pengembalian_edit")
		include ("pengembalian/pengembalian_edit.php");
	elseif ($tampil == "pengembalian_editproses")
		include ("pengembalian/pengembalian_editproses.php");
	elseif ($tampil == "pengembalian_hapus")
		include ("pengembalian/pengembalian_hapus.php");

	elseif ($tampil == "gudang")
		include ("gudang/gudang_tampil.php");
	elseif ($tampil == "gudang_tambah")
		include ("gudang/gudang_tambah.php");
	elseif ($tampil == "gudang_tambahproses")
		include ("gudang/gudang_tambahproses.php");
	elseif ($tampil == "gudang_edit")
		include ("gudang/gudang_edit.php");
	elseif ($tampil == "gudang_editproses")
		include ("gudang/gudang_editproses.php");
	elseif ($tampil == "gudang_hapus")
		include ("gudang/gudang_hapus.php");

	elseif ($tampil == "barang_masuk")
		include ("barang_masuk/barang_masuk_tampil.php");
	elseif ($tampil == "barang_masuk_tambah")
		include ("barang_masuk/barang_masuk_tambah.php");
	elseif ($tampil == "barang_masuk_tambahproses")
		include ("barang_masuk/barang_masuk_tambahproses.php");
	elseif ($tampil == "barang_masuk_edit")
		include ("barang_masuk/barang_masuk_edit.php");
	elseif ($tampil == "barang_masuk_editproses")
		include ("barang_masuk/barang_masuk_editproses.php");
	elseif ($tampil == "barang_masuk_hapus")
		include ("barang_masuk/barang_masuk_hapus.php");

	elseif ($tampil == "barang_keluar")
		include ("barang_keluar/barang_keluar_tampil.php");
	elseif ($tampil == "barang_keluar_tambah")
		include ("barang_keluar/barang_keluar_tambah.php");
	elseif ($tampil == "barang_keluar_tambahproses")
		include ("barang_keluar/barang_keluar_tambahproses.php");
	elseif ($tampil == "barang_keluar_edit")
		include ("barang_keluar/barang_keluar_edit.php");
	elseif ($tampil == "barang_keluar_editproses")
		include ("barang_keluar/barang_keluar_editproses.php");
	elseif ($tampil == "barang_keluar_hapus")
		include ("barang_keluar/barang_keluar_hapus.php");

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
