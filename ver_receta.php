<?php

include("funciones.php");

$codigo = $_GET['id'];
$res = muestraReceta($codigo);
$res2 = muestraPreguntayRespuesta($codigo);

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
<script>
$(document).ready(function(){ ckeLightbox(); });
function ckeLightbox(){
    var c=0;
    $('a.ckelightbox').each(function(){
        c++;
        var g=$(this).attr('class').split('ckelightboxgallery')[1];
        if(!g)g=c;
        $(this).attr('data-lightbox',g);
        $(this).attr('data-title',$(this).attr('title'));
    }); 
}
</script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
            </script>	
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
    			<br /><br />	<h1><?php echo $f['titulo_receta']; ?></h1> <p>  </p><h5><?php echo $f['fecha_receta'];?></h5>
    			</header >
    			<hr />
			</div>	
       <div class="content_top">
   	  		<div>
				<br /><?php echo $f['contenido_receta']; ?>	
			</div>	

      <br/>
      <br/>
      <a href="<?php echo $f['pdf_receta']; ?>"><img src="images/Download.png" style="position:left"></a>
   	  	  <?php } ?>
   	  	
   	  	<div class="clearfix"> </div>

   	  </div>
   	  </div>

   	  <hr />
   	  	<br /> 






   	  		<div id="preguntas">
			<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="control_pregunta.php" method="post">
          <fieldset>
            <h3 class="text-center">Pregunta Aqui</h3>
    		<br>
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nombre</label>
              <div class="col-md-9">
                <input id="txt_nom" name="txt_nom" type="text" placeholder="Tu Nombre" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input id="txt_email" name="txt_email" type="email" placeholder="Tu Email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Pregunta</label>
              <div class="col-md-9">
                <textarea class="form-control" id="ta_pregunta" name="ta_pregunta" placeholder="Pregunta Aqui..." rows="5"></textarea>
              </div>
            </div>
            <input type="hidden" id="txt_codigo" name="txt_codigo" value="<?php echo $codigo; ?>"/>
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Preguntar</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
	<br>
	<br>
	<br>
	<h1>Preguntas y Respuestas</h1>
	<br>
       <?php foreach ($res2 as $a) { ?>
       	
       
		<div class="container" >
    <div class="row">
    
        <div class="timeline-centered" style="width:80%" >

            <article class="timeline-entry" style="width:80%">

            <div class="timeline-entry-inner" >

                <div class="timeline-icon bg-secondary">
                    <i class="entypo-suitcase"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#"><?php echo $a['usuario_pregunta'];?> Pregunta : </a></h2>
                    <p><?php echo $a['contenido_pregunta'];  ?></p>
                    <span style=""><?php echo $a['fecha_pregunta']; ?></span>
                </div>
            </div>

        </article>

        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-success">
                    <i class="entypo-feather"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#"><?php echo $a['nombre_usuario']; ?> Responde:</a></h2>
                    <p><?php echo $a['contenido_respuesta']; ?></p>
                </div>
            </div>

        </article>


    

       

    </div>

    
    </div>
</div>

<?php } ?>

</div>

			</form>

		</div>
 		<div class="clearfix"> </div>
	</div>
    </div>

      <?php include('footer.php'); ?>

   </div>
</body>
</html>		