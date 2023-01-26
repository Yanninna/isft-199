<?php
session_start();
//conexion con db
$hostname = "localhost";
$base = "isft199";
$username = "root";
$password = "";

$conecta = mysqli_connect($hostname, $username, $password,$base) or trigger_error(  mysqli_error(),E_USER_ERROR); 
mysqli_select_db($conecta, $base);
mysqli_query($conecta,"SET NAMES 'utf8'");

$web = 'http://localhost/isft199/';

?>