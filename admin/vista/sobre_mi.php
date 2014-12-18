<?php 
session_start();
include('../modelo/funciones.php');
if(!isset($_SESSION['nombre_usuario']))
{header("location:../index.php");}

$res= sobre_mi();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Sobre Mi</title>
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

	<div class="well" style="height:auto">
		<h3 class="text-center">Sobre Mi</h3><hr>
            <br>
            <br>
            <div class="row">
        <div class="col-md-4 col-md-offset-4"><!--col-md-6 col-md-offset-3-->        
          <form id="iform"  method="POST" action="../control/ingresarSobreMi.php" enctype="multipart/form-data">
            <?php
              foreach($res as $d)
              {
                ?>
     <p> Imagen : <input type="file" id="imagen" name="imagen" class="form-control" required autofocus/>   </p>
  	<p> Contenido  :  <textarea id="ta_contenido" name="ta_contenido" class="form-control" required><?php echo $d['sobre_mi']; ?></textarea>   </p>
              <?php
              
              }

              ?>
     
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