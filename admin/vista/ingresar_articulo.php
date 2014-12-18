<?php
session_start();
if(!isset($_SESSION['nombre_usuario']))
{header("location:../index.php");}
include_once("../modelo/funciones.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingresar Articulo</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	<script type="text/javascript" src="../js/jQuery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
      
      
      function salir(){
         var respuesta=confirm('Desea realmente Cerrar Sesion?');
         if(respuesta==true)
             window.location="../salir.php";
        else
             return 0;
      }
      
     
     </script>
	
</head>
<body>
	<?php include("inc/header.php");?>

	<div class="well" style="height:auto;">
		 <h3 class="text-center">Ingresar Articulo</h3><hr>
            <br>
            <br>
            <div class="row">
        <div class="col-md-6 col-md-offset-3"><!--col-md-6 col-md-offset-3-->        
          <form id="iform"  method="POST" action="../control/ingresarReceta.php" enctype="multipart/form-data">
             <p>Titulo : <input type="text" id="txt_titulo" name="txt_titulo" class="form-control" required></p>
             <p>Imagen Principal : <input type="file" id="imagen" name="imagen" class="form-control" required autofocus/>   </p>
             <p> Contenido  :  <textarea id="ta_contenido" name="ta_contenido" class="ckeditor" required></textarea>   </p>
             
     
      <br>
      <br>
      <input type="submit" id="btn_ingresar" name="btn_ingresar" class="btn btn-primary btn-lg btn-block" value="Ingresar"/> 
       
      </form>
       </div>
           </div>
		


	</div>



	
	<?php include("inc/footer.php");?>

	
</body>
</html>