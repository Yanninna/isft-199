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






<fieldset>


        <form action="porcentaje.php" method="post">
            


               
                <h2>Datos personales</h2>
                <div class="form-group">
                    <label for="al_nombre">Nombre</label>
                    <input type="text" class="form-control" id="al_nombre" name="al_nombre"
                        placeholder="<?php echo $row_alumno['al_nombre'];?>"
                    >
                </div>
                <div class="form-group">
                    <label for="al_dni">Documento</label>
                    <input type="text" class="form-control" id="al_dni" name="al_dni"required
                    value="<?php echo $row_alumno['al_dni'];?>"
                    >
                    
                </div> 

            
                <div class="form-group">
                    <label for="ca_id">Carrera</label>
                    <select id="ca_id" class="form-control" name="ca_id">
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

                </div> 
 <p>
           <br>
            <br>
            <br>
           
<nav class="nav" >
    
    <div class="btn-toolbar align-items-left" role="toolbar" aria-label="Toolbar with button groups">
<div class="btn-group mr-2 align-items-center" role="group" aria-label="First group">
    
    <input type="submit" class="btn btn-primary btn-sm ml-auto align-items-rigth"
        value="buscar">
  



 <button type="button"class="btn btn-primary btn-sm ml-auto align-items-center">
    <a href="../index.php" style="color:white">Volver </a>
    </button>
</div>
</div>
</div>
</nav>
</p>
</div>
</div>







        
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

