<?php
include('../connections/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ingreso a la plataforma</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap.rtl.min.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.rtl.min.css">
	<link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../css/bootstrap-reboot.rtl.min.css">
	<link rel="stylesheet" href="../css/bootstrap-utilities.min.css">
	<link rel="stylesheet" href="../css/bootstrap-utilities.rtl.min.css">

</head>
<body>
<?php include('../parts/header_int.php'); ?>
	<main role="main">
		<div class="jumbotron jumbotron-fluid bg-dark text-white">
			<div class="container">
				<h1 class="display-3">Bienvenido</h1>
				<p class="lead">Esta es la plataforma de Alumnos</p>
				<hr class="my-2">
				<p>Seleccione una opcion para continuar.</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 border rounded">
					<a href="constancias/alumno_reg.php" class="nav-link text-dark">
					<h2>Constancia de Alumno Regular</h2>
					<p>Ingrese para solicitar una constancia de alumno regular.</p>
					</a>
				</div>
				<div class="col-md-4 border rounded">
					<a href="constancias/percent.php" class="nav-link text-dark">
					<h2>Porcentaje Materias Aprobadas</h2>
					<p>Ingrese para solicitar el porcentaje de materias aprobadas.</p>
					</a>
				</div>
				<div class="col-md-4 border rounded">
					<a href="constancias/constancia.php" class="nav-link text-dark">
					<h2>Mis constancias</h2>
					<p>Aqui veras informacion sobre tus solicitudes de constancias.</p>
					</a>
				</div>
			</div>
		</div>
	</main>
<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../bootstrap.bundle.min.js"></script>
	<script src="../bootstrap.esm.min.js"></script>
	<script src="../bootstrap.min.js"></script>
</body>
</html>