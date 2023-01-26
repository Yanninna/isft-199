

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
	<link rel="stylesheettylesheet" href="../css/bootstrap-utilities.min.css">
	<link rel="styleshe" href="../css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../css/bootstrap-reboot.rtl.min.css">
	<link rel="set" href="../css/bootstrap-utilities.rtl.min.css">

</head>
<body>
<?php include('../parts/header_int.php'); ?>
	<main role="main">
		<div class="jumbotron jumbotron-fluid bg-dark text-white">
			<div class="container">
				¡Bien Venido!
					<div class="col-sm">

		<form action="list.php" method="POST">
		Ingrese Nombre y Apellido:
		<input type="text" name="al_nombre"required><br><br>
		
		Ingrese Documento:
		<input type="text" name="al_dni"required><br><br>

		Ingrese Telefono:
		<input type="text" name="al_tel"required><br><br>
		Ingrese Mail:
		<input type="text" name="al_mail"required><br><br>
 	
		Ingrese Mail Nuevamente:
		<input type="text" name="us_nombre"required><br><br>
		Ingrese Contraseña:
		<input type="text" name="us_password"required><br><br>


 	seleccione carrera:
 	
<select name="id_carrera"= id="id_carrera"required>

<option value="1">Tecnicatura Superior en Administracion de Empresas</option>
<option value="2">Tecnicatura Superior en Higiene y Seguridad en el Trabajo</option>
<option value="3">Tecnicatura Superior en Logística</option>
<option value="4">Tecnicatura Superior en Turismo</option>
<option value="5">Tecnicatura Superior en Hotelería</option>
<option value="6">Tecnicatura Superior en Administración de Recursos Humanos</option>
</select> 
<br>
<button type="submit">Inscribirse</button>
</form>
<br>
<br> 
<form action="https://formspree.io/f/xqknjwlz" method="POST">
  <label for="email">email:
<br>
    <input type="email" id="email" name="email">

  </label>
<br>
  <label>
    Mensage:
    <br>
    <textarea for name="message"></textarea>
  </label>
<br>
  <br>
  <button type="submit" >Enviar</button>


			</div>
			</form>
 <form action="index.html" method="post">
 	<br>
Volver a menu Principal:
<br>
<input type="submit"  value="Menu Principalncipal">
</form>
		</div>
	</main>
<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../bootstrap.bundle.min.js"></script>
	<script src="../bootstrap.esm.min.js"></script>
	<script src="../bootstrap.min.js"></script>
</body>
</html>