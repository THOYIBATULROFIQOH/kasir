<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = md5($_POST['password']);

// menginput data ke database
mysqli_query($koneksi,"insert into petugas values(0, '$nama_petugas','$username','$password','2')");
 //Level 2 untuk petugas

 // mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=info_daftar");

?>