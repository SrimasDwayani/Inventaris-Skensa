<?php 
	$conn = mysqli_connect("localhost", "root", "", "db_inventaris");

	if(!$conn){
		echo "Koneksi Gagal";
		die();
	} 
?>