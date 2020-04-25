<?php 
	include_once("../../../conf/koneksi.php");

	$id_inventaris = $_POST['id_inventaris'];
	$nama_barang= $_POST['nama_barang'];
	$kondisi = $_POST['kondisi'];
	$keterangan = $_POST['keterangan'];
	$jumlah = $_POST['jumlah'];
	$id_jenis = $_POST['id_jenis'];
	$tanggal_register = $_POST['tanggal_register'];
	$id_ruang = $_POST['id_ruang'];
	$kode_inventaris = $_POST['kode_inventaris'];
	$id_petugas = $_POST['id_petugas'];

	$query = "INSERT INTO tbsm (id_inventaris, nama_barang, kondisi, keterangan, jumlah, id_jenis, tanggal_register, id_ruang, kode_inventaris, id_petugas)
	VALUE ('$id_inventaris', '$nama_barang', '$kondisi', '$keterangan', '$jumlah', '$id_jenis', '$tanggal_register', '$id_ruang', '$kode_inventaris', '$id_petugas') ";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location: tampil_tbsm.php');
	}else{
		echo "Input data gagal";
	}

 ?>