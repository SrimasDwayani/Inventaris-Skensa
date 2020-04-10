<?php
	include_once("../../conf/koneksi.php");

	$id= $_GET['id'];

	$query="DELETE from tb_petugas WHERE id_petugas=$id";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:../home.php');
	}else{
		echo "Hapus data gagal!";
	}
?>