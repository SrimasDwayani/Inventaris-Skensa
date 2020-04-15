<?php
	include_once("../../conf/koneksi.php");

	$id= $_GET['id'];

	$query="DELETE FROM mm WHERE id_inventaris=$id";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:mm_tampil.php');
	}else{
		echo "Hapus data gagal!";
	}
?>