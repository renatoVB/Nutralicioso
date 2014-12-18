<?php

include_once('../modelo/funciones.php');
$rutaEnServidor='imagenes/images';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
$rutaDestinoImg='../../'.$rutaEnServidor.'/'.$nombreImagen;

move_uploaded_file($rutaTemporal,$rutaDestinoImg);
	// Obtenemos los Datos.
	$codigo = $_POST['txt_codigo'];
	$titulo = $_POST['txt_titulo'];
	$resu = $_POST['ta_resumen'];
	$contenido = $_POST['ta_contenido'];
	$tipo = $_POST['sel_tipo'];

	$modificar = modificarReceta($codigo, $titulo, $resu, $contenido, $rutaDestino, $tipo);
  
	if($modificar == '1')
	{
	?>
		<script>
			alert('La Receta se ha modificado exitosamente.');
			window.close();
		</script>
<?php
	}else
	{
	?>
		<script>
			alert('ERROR: Ha ocurrido un error al modificar la Receta. Intente Nuevamente.');
			window.close();
		</script>
<?php
	}

?>