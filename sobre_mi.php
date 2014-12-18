<?php

include("funciones.php");

$res = sobre_mi();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sobre Mi</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Blog de alimentación saludable, Recetas, información, preparaciónes"/><script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
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
		</br>
   			<br>
	   	  <h1>Sobre Mi</h1>
	   	  <br>
	   	  <div class="container" style="min-height: 504px;">
   		<?php  foreach ($res as $f) { ?>
   	  		<img src=" <?php echo $f['imagen_sobremi']; ?>" class="img-responsive" style="float: left;margin:10px" >
			<p style="float: left;"><?php echo $f['sobre_mi']; ?></p>

   	  	  <?php } ?>
   	  	
   	  
   	  </div>
	   	<br>
    <br>  
    </div>
    
<?php include('footer.php'); ?>
    
   </div>

   
</body>
</html>		