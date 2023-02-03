<?php 
session_start();
//error_reporting(0); 

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'simdes');


$con = mysqli_connect(HOST, USER, PASS, DBNAME) or die('<center><h1>Konfigurasi Database Bermasalah !</h1>'.mysqli_connect_error().'</center>');

?>