<?php

include("funciones.php");

$res = muestraRecetaUltimas();
$res2= muestraUltimosArticulos();


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Nutralicioso</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Blog de alimentación saludable, Recetas, información, preparaciónes"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/hover_pack.js"></script>

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
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
</script>
</head>
<body style="background-image:url('images/madera.jpg'); background-repeat: no-repeat;
    background-attachment: fixed;">
	<div class="homepage" style="margin-left:50px;margin-right:50px">

	<div class="banner">
   	  <div class="container">
   		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		</div>

	  <?php include("header.php"); ?>

	        <div class="clearfix"> </div>
	       </div>
   </div>

   <div class="main" style="background: #f2f2f2">

    <div class="container">
    		
     <div class="top_grid" id="arrow">
     	<div id="featured"
    			<header style:"text-align: center">
    				<br/>
    				<br/>
            
					<h1>Bienvenidos a Nutralicioso</h1>
				</header >
				<br/>
    				<br/>
            <p>Todos las Recetas Saludables y Tips de Cocina los puedes encontrar acá en nutralicioso.com</p>
				<hr />
         
		</div>	
   	   <div class="content_middle">

   	   		<div id="featured"
    			<header style:"text-align: center">
    				<h1>Ultimas Recetas</h1> <br />
				</header >
				
		</div>	

   	   		<?php  foreach ($res as $f) { ?>

   	  	<div class="col-md-4 col2" height="400px" width="450px">
   	  		<a href="ver_receta.php?id=<?php echo $f['id_receta']; ?>" class="b-link-stroke b-animate-go  thickbox">
		   <img src="<?php echo $f['imagen_receta']; ?>" style="width: 350px; height: 300px; !important"  class="img-responsive" alt=""/>
       <div class="b-wrapper">
        <p class="b-animate b-from-right  b-delay03 "></p></div> 
        </a>
        <div id="featured" style="text-align: center">
       
            <h3><?php echo $f['titulo_receta']; ?></h3>
        <p><?php echo $f['resumen_receta']; ?></p>
        <br/> <a href="ver_receta.php?id=<?php echo $f['id_receta']; ?>"><img src="images/leer.png" style="box-shadow: 3px 3px 6px #8B8585;"></a>
        
      
      
        
        </div>  
        

   	  	</div>
   	  	  <?php } ?>
   	  	
   	  	<div class="clearfix"> </div>

   	  </div>


        <hr/>

           <div class="content_middle">

          <div id="featured"
          <header style:"text-align: center">
            <h1>Ultimos Articulos</h1> <br />
        </header >
        
    </div>  

          <?php  foreach ($res2 as $f2) { ?>

        <div class="col-md-4 col2" height="400px" width="450px">
          <a href="ver_articulo.php?id=<?php echo $f2['id_articulo']; ?>" class="b-link-stroke b-animate-go  thickbox">
       <img src="<?php echo $f2['imagen_articulo']; ?>" style="width: 350px; height: 300px; !important"  class="img-responsive" alt=""/>
       <div class="b-wrapper">
        <p class="b-animate b-from-right  b-delay03 "></p></div> 
        </a>
        <div id="featured" style="text-align: center">
       
            <h3><?php echo $f2['titulo_articulo']; ?></h3>
       <br/> <a href="ver_articulo.php?id=<?php echo $f2['id_articulo']; ?>"><img src="images/leer.png" style="box-shadow: 3px 3px 6px #8B8585;"></a>
        
      
      
        
        </div>  
        

        </div>
          <?php } ?>
        
        <div class="clearfix"> </div>

      </div>
        
      



   	  </div>

   	</div>

		<?php include('footer.php'); ?>
</div>
</body>
</html>		