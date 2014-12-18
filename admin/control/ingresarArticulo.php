<?php
session_start();
include_once('../modelo/funciones.php');
$rutaEnServidor='imagenes/images';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
$rutaDestinoImg='../../'.$rutaEnServidor.'/'.$nombreImagen;

	move_uploaded_file($rutaTemporal,$rutaDestinoImg);
	
	$titulo = $_POST['txt_titulo'];
    $contenido = $_POST['ta_contenido'];
	
	$receta = ingresarReceta($titulo,$contenido, $rutaDestino);

	// Verificamos que se hallan insertado los datos.
	if($receta == '1')
	{
	?>
		<script>
			// Alert informando.
			alert('El Articulo ha sido registrado correctamente.');

			// Redirigmos a ver Productos.
			window.location="../vista/ingresar_articulo.php";
		</script>
    <?php
	}else{?>
	<script>
			// Alert informando.
			alert('El Articulo NO ha sido registrado.');

			// Redirigmos a ver Productos.
			window.location="../vista/ingresar_articulo.php";
		</script>
		<?php
}
		?>