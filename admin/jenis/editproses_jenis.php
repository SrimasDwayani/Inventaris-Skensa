<?php
	include_once("../../conf/koneksi.php");

	$id=$_POST['id'];
	$nama_jenis=$_POST['nama_jenis'];
	$kode_jenis=$_POST['kode_jenis'];
	$keterangan=$_POST['keterangan'];

	$query="UPDATE jenis SET nama_jenis='$nama_jenis', kode_jenis= '$kode_jenis', keterangan='$keterangan' WHERE id_jenis=$id ";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:http://localhost/Inventaris-Skensa/admin/home.php?tampil=jenis');
	}else{
		echo "Update data gagal!";
	}
?>