<?php
	include_once("../../conf/koneksi.php");

	$id=$_POST['id'];
	$nama_petugas=$_POST['nama_petugas'];
	$nip=$_POST['nip'];
	$jurusan=$_POST['jurusan'];

	$query="UPDATE tb_petugas SET nama_petugas='$nama_petugas', nip=$nip, jurusan='$jurusan' WHERE id_petugas=$id ";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:../home.php');
	}else{
		echo "Update data gagal!";
	}
?>