<?php
    include("../connections/validacion.php");
	switch($_SESSION['nivel']){
        default:
		$url = "../abm-admin/index.php";
        break;
        case 0:
		$url = "../abm-admin/index.php";
        break;
		case 1:
		$url = "../abm-alumno/index.php";
		break;
		case 2:
		$url="../abm-profesor/index.php";
		break;	
		}
		header ("Location: $url");
		 
		
?>