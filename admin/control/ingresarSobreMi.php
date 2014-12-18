<?php
session_start();
include_once('../modelo/funciones.php');
$rutaEnServidor='imagenes/images';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
$rutaDestinoImg='../../'.$rutaEnServidor.'/'.$nombreImagen;

move_uploaded_file($rutaTemporal,$rutaDestinoImg);
	
	
    $contenido = $_POST['ta_contenido'];
	

	$sobremi = ingresarSobreMi($contenido, $rutaDestino);

	// Verificamos que se hallan insertado los datos.
	if($sobremi == '1')
	{
	?>
		<script>
			// Alert informando.
			alert('Sobre Mi ha sido registrado correctamente.');

			// Redirigmos a ver Productos.
			window.location="../vista/inicio_admin.php";
		</script>
    <?php
	}

	?>