<?php 
	include_once("../../conf/koneksi.php");

	$id_level = $_POST['id_level'];
	$nama_level= $_POST['nama_level'];

	$query = "INSERT INTO level (id_level, nama_level)
	VALUE ('$id_level', '$nama_level') ";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location: http://localhost/Inventaris-Skensa/admin/home.php?tampil=level');
	}else{
		echo "Input data gagal";
	}

 ?>