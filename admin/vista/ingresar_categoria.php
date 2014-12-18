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
	<title>Ingresar Receta</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	<script type="text/javascript" src="../js/jQuery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
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

	<div class="well" style="height:800px;">
		 <h3 class="text-center">Ingresar Categoria Receta</h3><hr>
            <br>
            <br>
            <div class="row">
        <div class="col-md-4 col-md-offset-4"><!--col-md-6 col-md-offset-3-->        
          <form id="iform"  method="POST" action="../control/ingresarCategoria.php" enctype="multipart/form-data">
     <p>Nueva Categoria : <input type="text" id="txt_cat" name="txt_cat" class="form-control" required></p>
     
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