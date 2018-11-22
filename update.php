<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update pelanggan set nama='$nama', email='$email',no_hp='$nohp', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>