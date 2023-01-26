
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>exitoso</title>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost", "root", "", "isft199") or
die("Problemas con la conexión");



mysqli_query($conexion,"insert into hist_academico (ma_id, ma_libro, ma_folio, ma_fecha, ma_nota, ma_observ, al_dni, carrera) values ('$_REQUEST[ma_id]','$_REQUEST[ma_libro]','$_REQUEST[ma_folio]','$_REQUEST[ma_fecha]','$_REQUEST[ma_nota]','$_REQUEST[ma_observ]','$_REQUEST[al_dni]','$_REQUEST[carrera]')") or

die("Problemas en el select".mysqli_error($conexion));


?>
 <form action="index.html" method="post">
  <br>
  <center>
<h1>Notal Final de Materia ingresado exitosamente:</h1>
<br>
<br>
<h2>Aguarde unos segundos...</h2>
  </center>

<br>
<br>

 
<!-- 
<button type="button" class="btn btn-default">
<a href="percent.php">Volver cargar OTRO Final</a>
</button> -->



<br>
<br>
<!-- <input type="submit"  value="Menu Principalncipal"> -->
<!-- <button type="button" class="btn btn-default">
<a href="../index.php">Menu Principalncipal</a>
</button> -->

</form>
</body>
</html>
