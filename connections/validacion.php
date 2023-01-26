<?php
session_start();
if ($_SESSION['login'] != "ok"){
	echo $_SESSION['login'];
	header("location:index.php?error=1+source=validacion");
}
?>