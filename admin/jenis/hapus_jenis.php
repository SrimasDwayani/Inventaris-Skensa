<?php
	include_once("../../conf/koneksi.php");

	$id= $_GET['id'];

	$query="DELETE FROM jenis WHERE id_jenis=$id";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:tampil_jenis.php');
	}else{
		echo "Hapus data gagal!";
	}
?>