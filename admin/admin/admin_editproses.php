<?php
	include_once("../../conf/koneksi.php");

	$id=$_POST['id'];
	$nama_admin=$_POST['nama_admin'];
	$username=$_POST['username'];
	$nip=$_POST['nip'];
	$id_level=$_POST['id_level'];

	$query="UPDATE admin SET nama_admin='$nama_admin', username= '$username', nip='$nip', id_level='$id_level' WHERE id_admin=$id ";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:http://localhost/Inventaris-Skensa/admin/home.php?tampil=admin');
	}else{
		echo "Update data gagal!";
	}
?>