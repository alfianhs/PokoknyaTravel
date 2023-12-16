<?php

include('koneksi.php');

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$sql = "select * from users where username = '$username'";
$process = mysqli_query($koneksi, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
	echo " &#10004; Username masih tersedia";
}else{
	echo " &#10060; Username tidak tersedia";
}
?>