<?php 
session_start();
include 'koneksi.php';

$Email = $_POST['Email'];
$Password = $_POST['Password'];

$data = mysqli_query($host,"select * from user where Email='$Email' and Password='$Password'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['Email'] = $Email;
	$_SESSION['status'] = "login";
	header("location:Homepage.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>