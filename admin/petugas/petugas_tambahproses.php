<?php 
	include_once("../../conf/koneksi.php");

	$id_petugas = $_POST['id_petugas'];
	$nama_petugas = $_POST['nama_petugas'];
	$nama_file=$_FILES['Foto']['name'];
	$tmp_file=$_FILES['Foto']['tmp_name'];
	$path="foto/" . $nama_file;
	move_uploaded_file($tmp_file, $path);
	$nip = $_POST['nip'];
	$notelp = $_POST['notelp'];
	$id_level = $_POST['id_level'];

	$query = "INSERT INTO tb_petugas (id_petugas,nama_petugas,foto,nip,notelp,id_level)
	VALUE ('$id_petugas', '$nama_petugas', '$nama_file', '$nip', '$notelp','$id_level') ";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location: ../home.php');
	}else{
		echo "Input data gagal";
	}

 ?>