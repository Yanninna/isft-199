<?php
include('../consultas.php');
include('fnpercent.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ingreso a la plataforma</title>
    <meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo $web;?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $web;?>css/bootstrap.rtl.min.css">
	<link rel="stylesheet" href="<?php echo $web;?>css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo $web;?>css/bootstrap-grid.rtl.min.css">
	<link rel="stylesheet" href="<?php echo $web;?>css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo $web;?>css/bootstrap-reboot.rtl.min.css">
	<link rel="stylesheet" href="<?php echo $web;?>css/bootstrap-utilities.min.css">
	<link rel="stylesheet" href="<?php echo $web;?>css/bootstrap-utilities.rtl.min.css">

    <style type="text/css"> #regiration_form fieldset:not(:first-of-type) {
        display: none;
    } </style>

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>


</head>
<body>








<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">Constancia de Historial Academico</h1>
        <p class="lead">Esta constancia esta sujeta a aprobacion por parte de preceptoria. La misma demora entre 5 y 10 dias habiles.</p>
        <hr class="my-2">
        <p>Por favor, verifique que los datos sean correctos. Cualquier dato erroneo puede resultar en la nulidad de la constancia.</p>
        <br>
    </div>
    <div class="container">
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>









        <form action="envioDeNotas.php" method="post">
            


               
                <h2>Datos personales</h2>
                <div class="form-group">
                    <label for="al_nombre">Nombre</label>
                    <input type="text" class="form-control" id="al_nombre" name="al_nombre"
                        value="<?php echo $row_alumno['al_nombre'];?>"
                    >
                </div>
                <div class="form-group">
                    <label for="al_dni">Documento</label>
                    <input type="text" class="form-control" id="al_dni" name="al_dni" placeholder="Numero de Documento"
                    value="<?php echo $row_alumno['al_dni'];?>"
                    >
                    
                </div> 
                <div class="form-group">
                    <label for="ca_id">Carrera</label>
                    <select id="carrera" class="form-control" name="carrera">
                    <?php do {  ?>
                        <option value="<?PHP echo $row_carrera['ca_id'] ;?>"
                                <?php if (!(strcmp($row_carrera['ca_id'] , $row_carrera['ca_id']))) {echo "selected=\"selected\"";} ?>
                                >
                        <?php echo $row_carrera['ca_nombre']?></option>
                        
                        <?php
                        /*MUESTRA LA LISTA DE TABLA*/
                        } while ($row_carrera = mysqli_fetch_assoc($carrera));
                        $rows = mysqli_num_rows($carrera);
                        if($rows > 0) {
                            mysqli_data_seek($carrera, 0);
                            $row_carrera = mysqli_fetch_assoc($carrera);
                        }
                        ?>
                    </select>

                </div><br>







        <fieldset>

        <!-- <label>Carrera</label>
            <select id="carrera" name="carrera">
            <?php
                $conexion = mysqli_connect("localhost", "root", "", "isft199") or die ("problemas con la conexion");

                    $registros = mysqli_query($conexion, "select ca_id, ca_nombre from carrera") or die ("Problemas con el select: " . mysqli_error($conexion));
                    //asignamos al select un valor en cero antes de cargar el while.
                    echo "<option value=0>Seleccionar una Carrera</options>";

                    while ($reg = mysqli_fetch_array($registros)) {

                        echo "<option value=\"$reg[ca_id]\">$reg[ca_nombre]</options>";
                    } 
            ?>

            </select> -->



            <br>
            <!-Creamos el div que modificaremos para cargar el select de los modelos->
            <div name="ma_id" id="ma_id"></div>
            <br>
            <br>

                <!-- <div class="form-group">
                    <h3></h3>
                    <input type="hidden" name="id_materia">
                    <select name="ma_estado" id="ma_estado">
                        <option value="0">Seleccione el estado de la materia</option>
                        <option value="0">No aprobada</option>
                        <option value="1">Cursada aprobada</option>
                        <option value="2">Final</option>
                    </select>
                     
                </div> -->
                <div class="form-row ">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ma_nota" id="ma_nota" placeholder="Nota del final"></div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ma_libro" id="ma_nota" placeholder="Libro del final"></div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ma_folio" id="ma_nota" placeholder="Folio del final"></div>
                    <div class="col-md-4">
                        <input type="date" class="form-control" name="ma_fecha" id="ma_nota"></div>
                        <label>
    Mensaje:
    <br>
    <textarea for name="ma_observ"></textarea>
  </label>
                </div>
 



   <button type="button" class="btn btn-primary">
    <a href="../index.php" style="color:white">Volver </a>
    </button>



    <input type="submit" name="btn_cargar" class="submit btn btn-success" value="Enviar" 
    id="submit_data" />
            </fieldset>

 


        </form>
    </div>
</div>




<script src="<?php echo $web;?>js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $web;?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $web;?>js/bootstrap.esm.min.js"></script>
<script src="<?php echo $web;?>js/bootstrap.min.js"></script>
</body>
</html>

<script type="text/javascript">
    //esta función inicia atomaticamente al cargarse la página.
    $(document).ready(function(){
        //Asignamos el valor 0 al select al iniciar la página.
        $('#carrera').val();
        //La funbción recargarLista() realiza una peticion en ajax
        recargarLista();
        //Esta función se va a ejecutar cada vez que el select marca sufra un cambio.
        $('#carrera').change(function(){
            // Y vuelve a ejecutar la función recargarLista;
            recargarLista();
        });
    })
</script>
<script type="text/javascript">
    function recargarLista(){
        // La función realiza una petición ajax mediante un post que trae al select 
        $.ajax({
            // El post manda los datos a datos.php
            type:"POST",
            url:"datosdecarga.php",
            // Se manda como  el contenido del select .
            data:"ca_id=" + $('#carrera').val(),
            // "r" es el que devuelve el contenido html de datos.php.
            success:function(r){
                // se carga "r" en el div m
                $('#ma_id').html(r);
            }
        });
    }
</script>
