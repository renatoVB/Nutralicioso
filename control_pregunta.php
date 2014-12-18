<?php
include('funciones.php');

$codigo=$_POST['txt_codigo'];
$nombre=$_POST['txt_nom'];
$email=$_POST['txt_email'];
$pregunta = $_POST['ta_pregunta'];

$preg=ingresarPregunta($codigo,$nombre,$email,$pregunta);

if($preg)
{
?>
	<script>
			// Alert informando.
			alert('La Pregunta ha sido realizada.');

			// Redirigmos a ver Productos.
			window.location="recetas.php";
		</script>
<?php
}

?>