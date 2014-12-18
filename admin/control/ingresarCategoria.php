<?php
session_start();
include_once('../modelo/funciones.php');

	
	$categoria = $_POST['txt_cat'];
  
	$cat = ingresarCategoria($categoria);

	// Verificamos que se hallan insertado los datos.
	if($cat == '1')
	{
	?>
		<script>
			// Alert informando.
			alert('La Categoria ha sido registrado correctamente.');

			// Redirigmos a ver Productos.
			window.location="../vista/inicio_admin.php";
		</script>
    <?php
	}

	?>