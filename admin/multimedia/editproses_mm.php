<?php
	include_once("../../conf/koneksi.php");

	$id=$_POST['id'];
	$nama_barang=$_POST['nama_barang'];
	$kondisi=$_POST['kondisi'];
	$keterangan=$_POST['keterangan'];
	$jumlah=$_POST['jumlah'];
	$id_jenis=$_POST['id_jenis'];
	$tanggal_register=$_POST['tanggal_register'];
	$id_ruang=$_POST['id_ruang'];
	$kode_inventaris=$_POST['kode_inventaris'];
	$id_petugas=$_POST['id_petugas'];

	$query="UPDATE mm SET nama_barang='$nama_barang', kondisi= '$kondisi', keterangan='$keterangan', jumlah='$jumlah', id_jenis='$id_jenis', tanggal_register='$tanggal_register', id_ruang='$id_ruang', kode_inventaris='$kode_inventaris', id_petugas='$id_petugas' WHERE id_inventaris=$id ";

	$hasil=mysqli_query($conn,$query);

	if($hasil){
		header('Location:mm_tampil.php');
	}else{
		echo "Update data gagal!";
	}
?>