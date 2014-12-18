<?php
session_start();
  // Incluir Funciones
 error_reporting(0);

if(!isset($_SESSION['nombre_usuario']))
{header("location:../index.php");}
include_once('../modelo/funciones.php');

$link = conectar();
$consulta = "select id_tipo , nombre_tipo from tipo_receta order by id_tipo asc";
$result=mysql_query($consulta , $link); 

  // Obtener variables
  $codigo = $_GET['codigo'];

  // Llamar a la función.
  $datos = muestraRecetaCod($codigo);

  // Llenamos los campos
  foreach($datos as $d)
  {

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
  
     <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
 </head>
<body>
<div class="container"><br>
  <div class="well" style="height:100%; width:100%">
    <h3 class="text-center">Modificar Receta</h3><hr>      
        <form id="iform"  method="POST" action="../control/modificarReceta.php" enctype="multipart/form-data">
        <p> Código : <input type="text" id="txt_codigo" name="txt_codigo"  class="form-control" value="<?php echo $d['id_receta']; ?>"  readonly/>   </p>
        <p> Titulo :  <input type="text" id="txt_titulo" name="txt_titulo" class="form-control" value="<?php echo $d['titulo_receta']; ?>" required/>    </p>
        <p> Resumen : <textarea id="ta_resumen" name="ta_resumen" class="form-control" required><?php echo $d['resumen_receta']; ?></textarea>   </p> 
        <p> Contenido : <textarea id="ta_contenido" name="ta_contenido" class="ckeditor" required><?php echo $d['contenido_receta']; ?></textarea>   </p> 
         <p> Imagen : <input type="file" id="imagen" name="imagen" class="form-control" value="<?php echo $d['imagen_receta']; ?>"/>   </p>
        <p> Tipo Receta : <select name="sel_tipo" id="sel_tipo" class="form-control" required>
                      <option value="<?php echo $d['id_tipo']; ?>"  ><?php echo $d['nombre_tipo']; ?></option>
                      <?php while($fila=mysql_fetch_row($result)){
                echo"<option  value='".$fila['0']."'>".$fila['1']."</option>";              
                      }
                      ?>
           </select>  </p>

<?php
  } 
?>
        <input type="submit" id="btn_ingresar" name="btn_ingresar" class="btn btn-primary" value="Modificar" align="center" /> 
        </form>
      </div>
    </div>
  </div></div>
</body>