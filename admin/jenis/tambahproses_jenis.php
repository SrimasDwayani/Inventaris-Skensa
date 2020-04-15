<?php 
	include_once("../../conf/koneksi.php");

	$id_jenis = $_POST['id_jenis'];
	$nama_jenis= $_POST['nama_jenis'];
	$kode_jenis = $_POST['kode_jenis'];
	$keterangan = $_POST['keterangan'];

	$query = "INSERT INTO jenis (id_jenis, nama_jenis, kode_jenis, keterangan)
	VALUE ('$id_jenis', '$nama_jenis', '$kode_jenis', '$keterangan') ";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location: http://localhost/Inventaris-Skensa/admin/home.php?tampil=jenis');
	}else{
		echo "Input data gagal";
	}

 ?>