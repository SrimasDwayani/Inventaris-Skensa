<?php
	include_once("../../conf/koneksi.php");

	$id= $_GET['id'];

	$query="DELETE FROM ruang WHERE id_ruang=$id";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:http://localhost/Inventaris-Skensa/admin/home.php?tampil=ruang');
	}else{
		echo "Hapus data gagal!";
	}
?>