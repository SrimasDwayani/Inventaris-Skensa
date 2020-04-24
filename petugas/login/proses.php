<?php 
include '../../conf/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$nip=$_POST['nip'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO log_peg (nama,email,nip,password) VALUES ('$nama','$email','$nip','$password')";
$hasil= mysqli_query($conn,$sql);
if ($hasil) {
	header('Location:../index.php');
}else{
	echo "Gagal!";
}

?>