<?php 
include '../conf/koneksi.php';

$nama = $_POST['nama'];
$nis=$_POST['nis'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO register (nama,nis,password) VALUES ('$nama','$nis','$password')";
$hasil= mysqli_query($conn,$sql);
if ($hasil) {
	header('Location:index.php');
}else{
	echo "Gagal!";
}

?>