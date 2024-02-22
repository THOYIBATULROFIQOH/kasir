<?php 
$koneksi = mysqli_connect("localhost","rofiqoh","221005","kasir");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>