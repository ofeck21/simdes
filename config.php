<?php  
define('PATH', 'http://localhost/ta/simdes/');
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'simdes');

$con = mysqli_connect(HOST, USER, PASS, DBNAME) or die('<center><h1>Konfigurasi Databse Bermasalah : ('.mysqli_connect_error().')</h1></center>');

?>