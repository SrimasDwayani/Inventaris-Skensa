<?php
	include_once("../../conf/koneksi.php");

	$id=$_POST['id'];
	$nama_petugas=$_POST['nama_petugas'];
	$nama_file=$_FILES['Foto']['name'];
	$tmp_file=$_FILES['Foto']['tmp_name'];
	$path="foto/" . $nama_file;
	move_uploaded_file($tmp_file, $path);
	$nip=$_POST['nip'];
	$notelp=$_POST['notelp'];
	$id_level=$_POST['id_level'];

	$query="UPDATE tb_petugas SET nama_petugas='$nama_petugas', foto='$nama_file', nip=$nip, notelp='$notelp', id_level='$id_level' WHERE id_petugas=$id ";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:../home.php');
	}else{
		echo "Update data gagal!";
	}
?>