<?php 
include '../../conf/koneksi.php';

$nip=$_POST['nip'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO log_peg (nip,password) VALUES ('$nip','$password')";
$hasil= mysqli_query($conn,$sql);
if ($hasil) {
	header('Location:../home.php');
}else{
	echo "Gagal!";
}

?>