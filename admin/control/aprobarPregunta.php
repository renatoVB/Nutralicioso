<?php
	
	// Incluir Funciones
	include_once('../modelo/funciones.php');

	// Obtener Variables
	$codigo = $_GET['codigo'];

	// Ejecutar la función
	$aprobar = aprobarPregunta($codigo);

	// Verificamos si se aprobo
	if($aprobar == '1')
	{
	?>
		<script>
			alert('La Pregunta ha sido aprobada exitosamente.');
			window.location = '../vista/aprobar_pregunta.php';
		</script>
<?php	
	}else
	{
		// Si no se aprobo, enviamos un error.
	?>
		<script>
			alert('No se pudo aprobar la Pregunta.');
			window.location = '../vista/aprobar_pregunta.php';
		</script>
<?php
	}

?>