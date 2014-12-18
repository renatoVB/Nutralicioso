<?php
session_start();
  // Incluir Funciones


if(!isset($_SESSION['nombre_usuario']))
{header("location:../index.php");}
include_once('../modelo/funciones.php');


  // Obtener variables
  $id_usuario = $_SESSION['id_usuario'];
  
  $pregunta = $_GET['pregunta'];
  $titulo = $_GET['titulo'];
  $codigo = $_GET['codigo'];


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="text/html" http-equiv="Content-type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Receta</title>
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
  <script type="text/javascript" src="../js/jQuery.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  
   
 </head>
<body>
<div class="container"><br>
  <div class="well" style="height:100%; width:100%">
    <h3 class="text-center">Responder Pregunta</h3><hr>      
        <form id="iform"  method="POST" action="../control/responderPregunta.php" enctype="multipart/form-data">
        <p> Receta :  <input type="text" id="txt_titulo" name="txt_titulo" class="form-control" value="<?php echo $titulo; ?>" readonly/>    </p>
        <p> Pregunta : <textarea id="ta_pregunta" name="ta_pregunta" class="form-control" readonly><?php echo $pregunta; ?></textarea>   </p> 
         <p> Respuesta : <textarea id="ta_respuesta" name="ta_respuesta" class="form-control" required></textarea>   </p> 
        <input type="hidden" name="txt_codigo" value="<?php echo $codigo; ?>">
        

        <input type="submit" id="btn_ingresar" name="btn_ingresar" class="btn btn-primary" value="Responder" align="center" /> 
        </form>
      </div>
    </div>
  </div></div>
</body>