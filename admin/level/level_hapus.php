<?php
	include_once("../../conf/koneksi.php");

	$id= $_GET['id'];

	$query="DELETE from level WHERE id_level=$id";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:http://localhost/Inventaris-Skensa/admin/home.php?tampil=level');
	}else{
		echo "Hapus data gagal!";
	}
?>