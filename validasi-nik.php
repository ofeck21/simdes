<?php

require_once 'config.php';

$nik = mysqli_real_escape_string($con, $_POST['nik']);
$sql = "select * from penduduk where nik = '$nik'";
$process = mysqli_query($con, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
	echo " &#10060; Maaf, NIK tidak ditemukan.";
}
?>