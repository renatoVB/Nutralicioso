<?php
function conectar()
	{
		$link=mysql_connect('localhost','root','') or die("Error en la Conexion."); 
		mysql_select_db('noelle',$link) or die("Error en la BD");
		mysql_query("SET NAMES 'utf8'");
		return $link;
	}

function muestraRecetaUltimas()
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT id_receta, titulo_receta, resumen_receta, imagen_receta FROM receta WHERE estado_receta = 1 ORDER BY id_receta DESC LIMIT 0,3");
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}

function Receta()
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT id_receta, titulo_receta, resumen_receta, imagen_receta ,fecha_receta 
			FROM receta 
			WHERE estado_receta = 1
			ORDER BY id_receta DESC");
		$res2=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res2))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}

function muestraReceta($codigo)
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT id_receta, titulo_receta, contenido_receta, imagen_receta ,fecha_receta, pdf_receta
			FROM receta 
			WHERE estado_receta = 1 AND id_receta = $codigo");
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}

function verCategoria()
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT id_tipo, nombre_tipo
			FROM tipo_receta");
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}


function sobre_mi()
 {

 	$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT id_sobre, sobre_mi, imagen_sobremi
			FROM sobremi");
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;

 }
 function ingresarPregunta($codigo, $nombre, $email, $pregunta)
	{
		$link=conectar();
		$sql="INSERT INTO pregunta (usuario_pregunta,correo_pregunta,fecha_pregunta,contenido_pregunta,estado_pregunta,id_receta) VALUES ('$nombre','$email',(SELECT CURDATE()),'$pregunta',0,$codigo)";
		$res=mysql_query($sql,$link);
		// Verificamos si se realizo el insert
		if(mysql_affected_rows()>0)
		{
			return '1';

		}
		mysql_close($link);

	}

function muestraPreguntayRespuesta($codigo)
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT pre.usuario_pregunta,pre.fecha_pregunta, pre.contenido_pregunta,usu.nombre_usuario ,res.contenido_respuesta FROM receta rec, usuarios usu, pregunta pre, respuesta res WHERE pre.id_pregunta = res.id_pregunta AND pre.id_receta=rec.id_receta AND res.id_usuario = usu.id_usuario AND pre.id_receta = '$codigo'");
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}
	function verRecetaCategoria($categoria)
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT id_receta, titulo_receta, resumen_receta , imagen_receta ,fecha_receta 
			FROM receta 
			WHERE estado_receta = 1 AND id_tipo='$categoria'
			ORDER BY id_receta DESC");
		$res2=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res2))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}

	function verArticulos()
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT id_articulo, titulo_articulo, contenido_articulo, fecha_articulo, imagen_articulo
			FROM articulo");
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}

	function muestraArticulo($codigo)
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT id_articulo, titulo_articulo, contenido_articulo, fecha_articulo, imagen_articulo
			FROM articulo 
			WHERE id_articulo = $codigo");
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}

	function muestraUltimosArticulos()
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT id_articulo, titulo_articulo, imagen_articulo FROM articulo where  estado_articulo = 0 order by id_articulo DESC LIMIT 0,3");
		$res2=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res2))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}



	 function Linkimg($contenido){
        if(preg_match_all('/<img[^<]+/i', $contenido, $result)){

            $r = preg_match_all('/<img[^<]+/i', $contenido);
            foreach($result as $k=>$v){
            	echo $r[0][0];
            echo '<div id="modulo1" class="flexslider"><ul class="slides">'.$r.'</ul></div>';
            
               /* foreach($v as $key=>$r){
                    //$mod=$key+1;
                    $r = substr($r, 0, strlen($r) - 3) .' height="200px" width="100%" '. substr($r, -3) ;
                    echo '<li><a href="">'.$r.'</a></li>';
                    
                    
                    echo htmlentities($r);
                }*/
            /*echo '</ul></div>';*/
            }
        }
        else{
            echo "No se encontro una etiqueta img";
        }
    } 
?>