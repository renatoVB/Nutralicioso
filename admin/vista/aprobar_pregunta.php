<?php 
session_start();
error_reporting(0);
include('../modelo/funciones.php');
if(!isset($_SESSION['nombre_usuario']))
{header("location:../index.php");}

$cont = cuentaPreguntaNo();


if(isset($_GET['page'])){
  $page = preg_replace("#[^0-9]#","",$_GET['page']);
}
else {
  $page = 1;
}

$reg = 10;
$last = ceil($cont/$reg);


if($page<1){

  $page=1;
}
else if($page > $last) {
  $page = $last;
}

$start=(($page-1)*$reg);
$res = muestraPreguntaNo($start,$reg);

if($last!=1){

if($page!=$last){
  $next = $page + 1;
  $paginador2 = '<a href="aprobar_pregunta.php?page='.$next.'">Siguente -></a>';
  $paginadorL = '<a href="aprobar_pregunta.php?page='.$last.'">Ultimo >></a>';
}
if($page!=1){
  $prev = $page - 1;
  $paginador = '<a href="aprobar_pregunta.php?page='.$prev.'"><- Anterior</a>';
  $paginadorP = '<a href="aprobar_pregunta.php?page=1"><< Primero</a>';
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aprobar Pregunta</title>
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


	<div class="well">
		<table class="table">
            <thead>
                    <tr>
                        <th>
                            Código
                        </th>
                         <th>
                            Receta
                        </th>
                        <th>
                            Contenido
                        </th>
                        <th>
                            Nombre Usuario
                        </th>
                        <th>
                           Correo Usuario
                        </th>
                        <th>
                           Fecha Pregunta
                        </th>
                    </tr>
            </thead>
            <tbody>
				<?php
					if($res==true)
           			{
      					foreach($res as $f)
    					{
    						?>
    					<tr>
              				<th style="font-weight:100"><?php echo $f['id_pregunta']; ?></th>
              				<th style="font-weight:100"><?php echo $f['titulo_receta']; ?></th>
             				 <th style="font-weight:100"> <?php echo $f['contenido_pregunta']; ?></th>
              				<th style="font-weight:100"><?php echo $f['usuario_pregunta']; ?></th>
              				<th style="font-weight:100"><?php echo $f['correo_pregunta']; ?></th>
              				<th style="font-weight:100"><?php echo $f['fecha_pregunta']; ?></th>
              				 <th width="30px"><a href="../control/aprobarPregunta.php?codigo=<?php echo $f['id_pregunta']; ?>" class="btn btn-sm btn-danger" role="button"><span class="glyphicon glyphicon-success"></span>&nbsp Aprobar</a></th>
          				</tr>
						<?php } ?>
				</tbody>
				<?php } 
             		else 
             		{
                		echo ("<tr><td><h4>&nbsp;&nbsp;&nbsp;No hay Preguntas</h4></td></tr>");
             		}  
             	?>
        </table>

     <ul class="pager">
            <li>
              <?php 
            echo $paginadorP;
            ?> 
            </li>
            <li>
             <?php 
            echo $paginador;
            ?> 
            </li>
            <li>
              <?php 
            echo $paginador2;
            ?> 
            </li>
            <li>
              <?php 
            echo $paginadorL;
            ?> 
            </li>
            </ul>
	</div>

	
	<?php include("inc/footer.php");?>
	
</body>
</html>