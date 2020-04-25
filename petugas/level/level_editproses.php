<?php
	include_once("../../conf/koneksi.php");

	$id=$_POST['id'];
	$nama_level=$_POST['nama_level'];

	$query="UPDATE level SET nama_level='$nama_level' WHERE id_level=$id ";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:http://localhost/Inventaris-Skensa/admin/home.php?tampil=level');
	}else{
		echo "Update data gagal!";
	}
?>