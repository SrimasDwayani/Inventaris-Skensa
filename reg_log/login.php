<?php 
include '../conf/koneksi.php';

$nis = $_POST['nis'];
$password = $_POST['password'];
 
$login ="SELECT * FROM register WHERE nis='$nis'";
$has=mysqli_query($conn,$login);
$cek = mysqli_num_rows($has);
$verty = mysqli_fetch_assoc($has);
 
if($cek > 0){
	if (password_verify($password,$verty['password'])) {
		header('location:../admin/home.php');
	}else{
		echo "password salah";
	}
}else{
	echo"NIS salah";
}
 
?>