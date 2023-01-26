<?php 
//Abrimos la conexion.
$conexion=mysqli_connect("localhost", "root", "", "isft199");
//creamos una variable $idMarca para recuperar el post.
$ca_id=$_POST['ca_id'];
	//sql que trae los datos para cargar el select.
	$sql="SELECT 
			ma_nombre
		from materia 
		where ca_id='$ca_id'";
		//ejecuta la consulta
	$result=mysqli_query($conexion,$sql);
	//Graba en la variable $cadena el inicio del select modelo.
	$cadena="<label>Materias</label> 
			<select id='ma_id' name='ma_id'>";

	while ($ver=mysqli_fetch_row($result)) {
		//cargo lo que ya tengo en $cadena mas los datos del select. Primero el id y despues el nombre.
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[0]).'</option>';
	}
	//imprimo todo lo que hay en $cadena mas el cierre del select.
	echo  $cadena."</select>";
	

?>

