<?php 
session_start();
include('../modelo/funciones.php');
if(!isset($_SESSION['nombre_usuario']))
{header("location:../../index.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido Administrador</title>
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


	<div class="well" style="height:500px;">

	Bienvenido al Administrador del Blog de Noelle.

	</div>



	<?php include("inc/footer.php");?>
</body>
</html>