<?php
	
	// Incluir Funciones
	include_once('../modelo/funciones.php');

	// Obtener Variables
	$codigo = $_GET['codigo'];

	// Ejecutar la función
	$eliminar = eliminarArticulo($codigo);

	// Verificamos si se elimino
	if($eliminar == '1')
	{
	?>
		<script>
			alert('El Articulo ha sido eliminado exitosamente.');
			window.location = '../vista/eliminar_articulo.php';
		</script>
<?php	
	}else
	{
		// Si no se elimino, enviamos un error.
	?>
		<script>
			alert('No se pudo eliminar el Articulo.');
			window.location = '../vista/eliminar_articulo.php';
		</script>
<?php
	}

?>