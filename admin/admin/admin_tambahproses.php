<?php 
	include_once("../../conf/koneksi.php");

	$id_admin = $_POST['id_admin'];
	$nama_admin= $_POST['nama_admin'];
	$username = $_POST['username'];
	$nip = $_POST['nip'];
	$id_level = $_POST['id_level'];

	$query = "INSERT INTO admin (id_admin, nama_admin, username, nip, id_level)
	VALUE ('$id_admin', '$nama_admin', '$username', '$nip', '$id_level') ";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location: http://localhost/Inventaris-Skensa/admin/home.php?tampil=admin');
	}else{
		echo "Input data gagal";
	}

 ?>