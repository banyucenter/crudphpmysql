<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$pas = $_POST['password'];
$pass = sha1($pas);
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$username','$pass')");
 
// mengalihkan halaman kembali ke user.php
header("location:user.php");
 
?>