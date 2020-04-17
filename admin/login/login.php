<?php 
include '../../conf/koneksi.php';

$nama = $_POST['nama'];
$nip=$_POST['nip'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO login (nama,nip,password) VALUES ('$nama','$nip','$password')";
$hasil= mysqli_query($conn,$sql);
if ($hasil) {
	header('Location:../home.php');
}else{
	echo "Gagal!";
}

?>