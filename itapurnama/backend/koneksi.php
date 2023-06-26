<?php 
$koneksi = mysqli_connect("localhost","root","","itapurnama");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>