<?php
	include_once("../../../conf/koneksi.php");

	$id= $_GET['id'];

	$query="DELETE FROM tp WHERE id_inventaris=$id";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:tampil_tp.php');
	}else{
		echo "Hapus data gagal!";
	}
?>