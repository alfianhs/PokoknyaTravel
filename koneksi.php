<?php

$server 	= "localhost";
$user		= "id20909067_pokoknyatravel";
$pass		= "Alfianmaho123#";
$db 		= "id20909067_crud_uas"; //sesuaikan nama databasenya
$koneksi = mysqli_connect($server, $user, $pass, $db); //pastikan urutan pemanggilan variabel nya sama.

//untuk cek jika koneksi gagal ke database
if(mysqli_connect_errno()) {
	echo "Koneksi gagal : ".mysqli_connect_error();
}
?>