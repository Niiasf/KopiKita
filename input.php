<?php 
include 'koneksi.php';
$Name = $_POST['name'];
$Email = $_POST['alamat'];
$Komentar = $_POST['Komentar'];
 
mysql_query("INSERT INTO user VALUES('','$Name','$Email','$Komentar')");
 
header("location:index.php?pesan=input");
?>