<?php
	include_once("../../conf/koneksi.php");

	$id=$_POST['id'];
	$nama_ruang=$_POST['nama_ruang'];
	$kode_ruang=$_POST['kode_ruang'];
	$keterangan=$_POST['keterangan'];

	$query="UPDATE ruang SET nama_ruang='$nama_ruang', kode_ruang= '$kode_ruang', keterangan='$keterangan' WHERE id_ruang=$id ";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:http://localhost/Inventaris-Skensa/admin/home.php?tampil=ruang');
	}else{
		echo "Update data gagal!";
	}
?>