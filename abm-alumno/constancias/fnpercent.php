<?php
//consulta tabla 
//constancias
$query_constancias = "SELECT MAX(co_id) FROM constancias";
$constancias = mysqli_query($conecta, $query_constancias);	
$row_constancias = mysqli_fetch_assoc($constancias);
$totalRows_constancias = mysqli_num_rows($constancias);
//varuable fecha
$fechaActual = date('d-m-Y');
//cotipo va a ser 1 para alumno regular, 2 para historial academico, etc
if(isset($_POST['btn_cargar'])){
    switch ($_POST['btn_cargar']) {
        case 'Siguiente':
            $co_tipo='2';
            $co_alumno=$_POST['al_id'];
            $co_fecha_sol=$fechaActual;
            $co_estado='1';

            $cargar_cabe_const="INSERT INTO constancias VALUES (
                default,
                '$co_tipo',
                '$co_alumno',
                '$co_fecha_sol',
                '',
                '',
                '$co_estado'
            )";
            if (mysqli_query($conecta,$cargar_cabe_const)){
                echo "constancia generada";
            }else{
                echo "Error" . $cargar_cabe_const . mysqli_error($conecta);
            }

        break;
        case 'Enviar':
            $co_id=$row_constancias['co_id'];
            $ma_id=$_POST['id_materia'];
            $ma_estado=$_POST['ma_estado'];
            if($ma_estado=0){
                $ma_libro=0;
                $ma_folio=0;
                $ma_nota=0;
                
            }else{
            $ma_libro=$_POST['ma_libro'];
            $ma_folio=$_POST['ma_folio'];
            $ma_fecha=$_POST['ma_fecha'];
            $ma_nota=$_POST['ma_nota'];
        }

        $cargar_hist_academ= "INSERT INTO hist_academico VALUES(
            '',
            '$ma_id',
            '$ma_estado',
            '$ma_libro',
            '$ma_folio',
            '',
            '$ma_nota',
            ''
        )";

        header("location:../index.php");
            if (mysqli_query($conecta,$cargar_hist_academ)){
                echo " articulo actualizado";
            }else{
                echo "Error" . $cargar_hist_academ . mysqli_error($conecta);
            }

        break;
        }
    }
?>