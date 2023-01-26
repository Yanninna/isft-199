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
        <h1 class="display-3">Constancia de Porcentajes de materias aprobadas</h1>
        <p class="lead">Esta constancia esta sujeta a aprobacion por parte de preceptoria. La misma demora entre 5 y 10 dias habiles.</p>
        <hr class="my-2">
        <p>Por favor, verifique que los datos sean correctos. Cualquier dato erroneo puede resultar en la nulidad de la constancia.</p>
        <br>
    </div>
    <div class="container">
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>


        <form action="" method="post">
            


               
                <h2>Datos personales</h2>
                <div class="form-group">
                    <label for="al_nombre">Nombre</label>
                    <input type="text" class="form-control" id="al_nombre" name="al_nombre"
                        placeholder="<?php echo $row_alumno['al_nombre'];?>"
                    >
                </div>
                <div class="form-group">
                    <label for="al_dni">Documento</label>
                    <input type="text" class="form-control" id="al_dni" name="al_dni" 
                    placeholder="<?php echo $row_alumno['al_dni'];?>"
                    >
                    
                </div> 
               <div class="form-group">
                    <label for="ca_id">Carrera</label>
                    <select id="ca_id" class="form-control" name="ca_id">
                    <?php do {  ?>
                        <option placeholder="<?PHP echo $row_carrera['ca_id'] ;?>"
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
                </div>


<br>
<h> Posee las siguiente materias aprobadas hasta el momento </h>
<br>

        <h>

             <div class="col-12 table-responsive">
        
            <table class="table table-hover table-condensed">
<tbody>
            <thead>
                <tr>
                   <!--  <td style ="color:black ; font-size:70%">Carrera </td> -->
                    <th class="success" style ="color:black ; font-size:90%">Materia</th>
                    <th class="success" style ="color:black ; font-size:90%">Libro</th>
                    <th class="success" style ="color:black ; font-size:90%">Folio</th>
                    <th class="success" style ="color:black ; font-size:90%">Fecha</th>
                    <th  class="success" style ="color:black ; font-size:90%">Nota</th>
                    <th  class="success" style ="color:black ; font-size:90%">Observacion</th>
                </tr>
            </thead>
           
                
    <?php
    $conexion= mysqli_connect("localhost","root","","isft199") or die 
    ("Problemas con la conexion");


$consulta="SELECT count(*) as carrera from hist_academico where hist_academico.al_dni =$_REQUEST[al_dni]";
    
    $result=mysqli_query($conexion,$consulta);
    $data=mysqli_fetch_array($result);
    $carrera =$data['carrera'];
    echo $carrera." Finales aprobados de  ";

$consulta="SELECT count(*) as ma_nombre from materia where materia.ca_id =$_REQUEST[ca_id]";

    $result=mysqli_query($conexion,$consulta);
    $data=mysqli_fetch_array($result);
    $ma_nombre =$data['ma_nombre'];
    echo $ma_nombre." materias totales la carrera. ";
    echo "Con un porcentje equivalente a ";

$item=$carrera;
$numeroVotos=$ma_nombre;
 
$percent = round($item/$numeroVotos*100);
 
if ($percent<=100){
 
    echo $percent." % de la carrera transitada.";
}
else {
    echo "1";
    echo '<br';
 
}



    $registro= mysqli_query($conexion, "select hist_academico.carrera as Carrera,
        hist_academico.ma_id as Materia,
        hist_academico.ma_libro as Libro,
        hist_academico.ma_folio as Folio,
        hist_academico.ma_fecha as Fecha, 
        hist_academico.ma_nota as Nota, 
        hist_academico.ma_observ as Observaciones from hist_academico where hist_academico.al_dni=$_REQUEST[al_dni] ") or die("Problemas en el select");

            while($reg= mysqli_fetch_array($registro)){
               
    ?>
    
<tr>
       <!--  <td style ="color:black ; font-size:70%">Carrera </td> -->
    <td  class="success" style ="color:black ; font-size:90%"><?php echo $reg['Materia']?> </td>
    <td class="success" style ="color:black ; font-size:90%"><?php echo $reg['Libro']?> </td>
    <td  class="success" style ="color:black ; font-size:90%"> <?php echo $reg['Folio']?></td>
    <td  class="success" style ="color:black ; font-size:90%"><?php echo $reg["Fecha"] ?></td>
    <td  class="success" style ="color:black ; font-size:90%"><?php echo $reg['Nota']?></td>
    <td  class="success" style ="color:black ; font-size:90%"><?php echo $reg['Observaciones']?></td>
                     
         
            

   </tr>

    <?php
        }
        mysqli_close($conexion);
    ?>
           
       </tbody>
</table>
            <br>
            <br>
             
            <br>
            <br>


<nav class="nav" >
    
    <div class="btn-toolbar align-items-left" role="toolbar" aria-label="Toolbar with button groups">
<div class="btn-group mr-2 align-items-center" role="group" aria-label="First group">
    
    <button type="button"class="btn btn-primary btn-sm ml-auto align-items-rigth">
    <a href="../index.php" style="color:black;">Volver </a>
    </button>
    </div>
</div>

<div class="col-md-8 col-md-offset-2 align-items-left">
<div class="card-body align-items-left">
   <div class="col-md-8 col-md-offset-2 align-items-left">
    <!-- //////////// para Inprimir//////////// -->
    <input type="button" value="Imprimir"class="btn btn-primary btn-sm ml-auto"
          onclick="window.print()" />
<!-- ////////////////////////////////////// -->
</div>
</div>
</div>
</nav>

</div>
</div>
        </form>
      
    </div>
  </div>





<script src="<?php echo $web;?>js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $web;?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $web;?>js/bootstrap.esm.min.js"></script>
<script src="<?php echo $web;?>js/bootstrap.min.js"></script>
</body>
</html>

