<?php
session_start();
include_once('../modelo/funciones.php');

	// Obtenemos los Datos.
	$id_pregunta = $_POST['txt_codigo'];
	$contenido = $_POST['ta_respuesta'];
	$id_usuario = $_SESSION['id_usuario'];
	

	$ingresar = ingresarRespuesta($contenido, $id_pregunta, $id_usuario);
  
	if($ingresar == '1')
	{
	?>
		<script>
			alert('Ha respondido exitosamente.');
			window.close();
		</script>
<?php
	}else
	{
	?>
		<script>
			alert('ERROR: Ha ocurrido un error al Responder. Intente Nuevamente.');
			window.close();
		</script>
<?php
	}

?>