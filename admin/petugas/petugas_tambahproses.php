<?php 
	include_once("../../conf/koneksi.php");

	$id_petugas = $_POST['id_petugas'];
	$nama_petugas = $_POST['nama_petugas'];
	$nip = $_POST['nip'];
	$jurusan = $_POST['jurusan'];

	$query = "INSERT INTO tb_petugas (id_petugas,nama_petugas,nip,jurusan)
	VALUE ('$id_petugas', '$nama_petugas', '$nip', '$jurusan') ";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location: ../home.php');
	}else{
		echo "Input data gagal";
	}

 ?>