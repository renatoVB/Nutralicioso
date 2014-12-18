<?php

include("funciones.php");

$codigo = $_GET['id'];
$res = muestraArticulo($codigo);

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Receta</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Blog de alimentación saludable, Recetas, información, preparaciónes"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>


<!-- Footer -->

<!-- CSS -->
<!-- CSS -->
<link href="cssf/style.css" rel="stylesheet" type="text/css" />

<!-- Font Awesome CSS -->
<link href="cssf/font-awesome.css" rel="stylesheet" type="text/css" />

<!-- JS -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/custom.js"></script>


<!-- fin footer -->


<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>

<script src="lightbox/js/lightbox.min.js"></script>
<link href="lightbox/css/lightbox.css" rel="stylesheet" />

</head>
<body style="background-image:url('images/madera.jpg'); background-repeat: no-repeat;
    background-attachment: fixed;">
	<div class="verrecetas" style="margin-left:50px;margin-right:50px">
	<div class="men_banner">
   	  <div class="container">
   		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		</div>

	   <?php include("header.php"); ?>

   </div>
   <div class="main" style="background: #f2f2f2">
   	<div class="container" >
   		<?php  foreach ($res as $f) { 
          
        ?>
          <div id="featured_receta"
    			<header style:"text-align: left">
    			<br /><br />	<h1><?php echo $f['titulo_articulo']; ?></h1> <p>  </p><h5><?php echo $f['fecha_articulo'];?></h5>
    			</header >
    			<hr />
			</div>	
       <div class="content_top">
   	  		<div>
				<br /><?php echo $f['contenido_articulo']; ?>	
			</div>	
   	  	  <?php } ?>
   	  	
   	  	<div class="clearfix"> </div>

   	  </div>
   	  </div>

   	  <hr />
   	  	<br /> 


 		<div class="clearfix"> </div>
	</div>
    </div>

      <?php include('footer.php'); ?>

   </div>
</body>
</html>		