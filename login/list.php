<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","isft199") or
die("Problemas con la conexión");

mysqli_query($conexion,"insert into alumno(al_nombre, al_tel, al_mail, id_carrera, al_dni) values
('$_REQUEST[al_nombre]','$_REQUEST[al_tel]','$_REQUEST[al_mail]','$_REQUEST[id_carrera]','$_REQUEST[al_dni]')") or
die("Problemas en el select".mysqli_error($conexion));

mysqli_query($conexion,"insert into usuario(us_nombre, us_password, us_nivel) values
('$_REQUEST[us_nombre]','$_REQUEST[us_password]','1')") or
die("Problemas en el select".mysqli_error($conexion));


mysqli_close($conexion);
echo "El alumno fue dado de alta.";
?>
 <form action="index.html" method="post">
  <br>
Volver a menu Principal:
<br>
<input type="submit"  value="Menu Principalncipal">
</form>
</body>
</html>
