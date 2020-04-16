<?php
	include_once("../../../conf/koneksi.php");

	$id= $_GET['id'];

	$query="DELETE FROM tbsm WHERE id_inventaris=$id";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:tampil_tbsm.php');
	}else{
		echo "Hapus data gagal!";
	}
?>