<?php
require('../connections/conexion.php');
$web = 'http://localhost/isft199/';

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
include("../connections/conexion.php");
$consulta="select * from usuario where us_nombre = '$usuario' and us_password = '$clave'";
$resultado=mysqli_query($conecta, $consulta);
$cant=mysqli_num_rows($resultado);
$fila=mysqli_fetch_array($resultado);

if ($cant != 1){
	header("location:index.html?error=1"."password incorrecta");
	echo '<script type="text/javascript">
    alert("Password incorrecta");
    window.location.href="index.php";
    </script>';
}
	else {
	session_start();
	$_SESSION['login']="ok";
	$_SESSION['id']=$fila['us_id'];
	$_SESSION['nombre']=$fila['us_nombre'];
	$_SESSION['nivel']=$fila['us_nivel'];
	header("location:inicio.php");
		}?>