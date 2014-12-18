<?php
	
	// Incluir Funciones
	include_once('../modelo/funciones.php');

	// Obtener Variables
	$codigo = $_GET['codigo'];

	// Ejecutar la función
	$eliminar = eliminarReceta($codigo);

	// Verificamos si se elimino
	if($eliminar == '1')
	{
	?>
		<script>
			alert('La receta ha sido eliminado exitosamente.');
			window.location = '../vista/eliminar_receta.php';
		</script>
<?php	
	}else
	{
		// Si no se elimino, enviamos un error.
	?>
		<script>
			alert('No se pudo eliminar la Receta.');
			window.location = '../vista/eliminar_receta.php';
		</script>
<?php
	}

?>