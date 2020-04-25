<?php 
	include_once("../../conf/koneksi.php");

	$id_ruang = $_POST['id_ruang'];
	$nama_ruang= $_POST['nama_ruang'];
	$kode_ruang = $_POST['kode_ruang'];
	$keterangan = $_POST['keterangan'];

	$query = "INSERT INTO ruang (id_ruang, nama_ruang, kode_ruang, keterangan)
	VALUE ('$id_ruang', '$nama_ruang', '$kode_ruang', '$keterangan') ";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location: http://localhost/Inventaris-Skensa/admin/home.php?tampil=ruang');
	}else{
		echo "Input data gagal";
	}

 ?>