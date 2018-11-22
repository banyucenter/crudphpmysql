<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan values('','$nama','$email','$nohp','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>