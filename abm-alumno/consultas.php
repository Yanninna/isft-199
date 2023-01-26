<?PHP
require('../../connections/conexion.php');
$editFormAction = $_SERVER['PHP_SELF'];
$USUARIO=$_SESSION['id'];

//el filtro es por email y no por id del alumno porque no tenemos actualizados los dni para utilizarlos como id
//datos del alumno

$query_alumno = "SELECT * FROM alumno where al_id = '$USUARIO'"; 
$alumno = mysqli_query($conecta, $query_alumno);	
$row_alumno = mysqli_fetch_assoc($alumno);
$totalRows_alumno = mysqli_num_rows($alumno);

//carrera
$carrera_alumno=$row_alumno['id_carrera'];

$query_carrera = "SELECT * FROM carrera WHERE ca_id='$carrera_alumno'";
$carrera = mysqli_query($conecta, $query_carrera);	
$row_carrera = mysqli_fetch_assoc($carrera);
$totalRows_carrera = mysqli_num_rows($carrera);

//materias de la carrera
$id_carrera=$row_carrera['ca_id'];
$query_materia = "SELECT * FROM materia WHERE ca_id='$id_carrera'";
$materia = mysqli_query($conecta, $query_materia);	
$row_materia = mysqli_fetch_assoc($materia);
$totalRows_materia = mysqli_num_rows($materia);

/*/ejemplo
$query_ejemplo = "SELECT * FROM ejemplo";
$ejemplo = mysqli_query($conecta, $query_ejemplo);	
$row_ejemplo = mysqli_fetch_assoc($ejemplo);
$totalRows_ejemplo = mysqli_num_rows($ejemplo);*/


?>