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
	$tipo = $_POST['sel_tipo'];
	$id = $_SESSION['id_usuario'];
	$resu = $_POST['ta_resumen'];

	ob_start();

?>
<page>
	  <h1><?php echo $titulo;?></h1> 
  <br>
  <div id="contenido">
  <?php 
  	echo $contenido;
  ?>
  </div> 
</page>

<?php 
	$rutaEnServidorpdf='pdf';
	$content=ob_get_clean();
	require_once('../html2pdf/html2pdf.class.php');

	$pdf = new HTML2PDF('P','A4','es','UTF-8');
	$pdf-> writeHTML($content);
	$archivo = $pdf-> output('../../pdf/'.$titulo.'.pdf', 'F');
	$nombrepdf = $titulo;

	$rutaDestinopdf=$rutaEnServidorpdf.'/'.$nombrepdf.'.pdf';
	

	$receta = ingresarReceta($titulo,$resu,$contenido, $rutaDestino,$rutaDestinopdf, $tipo, $id);

	// Verificamos que se hallan insertado los datos.
	if($receta == '1')
	{
	?>
		<script>
			// Alert informando.
			alert('La Receta ha sido registrado correctamente.');

			// Redirigmos a ver Productos.
			window.location="../vista/ingresar_receta.php";
		</script>
    <?php
	}else{?>
	<script>
			// Alert informando.
			alert('La Receta NO ha sido registrado.');

			// Redirigmos a ver Productos.
			window.location="../vista/ingresar_receta.php";
		</script>
		<?php
}
		?>