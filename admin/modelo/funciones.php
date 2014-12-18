<?php
function conectar()
	{
		$link=mysql_connect('localhost','root','') or die("Error en la Conexion."); 
		mysql_select_db('noelle',$link) or die("Error en la BD");
		mysql_query("SET NAMES 'utf8'");
		return $link;
	}

	function validaLogin($nom,$cla)
  	{ 
  
  	$link= conectar();
    $sw=false;
    $sql="SELECT * FROM usuarios WHERE nick_usuario = '$nom' AND clave_usuario =  '$cla'";
    $res=mysql_query($sql,$link);
    if($f=mysql_fetch_array($res))
      {     $sw=$f['id_usuario'];
		
			}
    mysql_close($link);
	
	return $sw;   
  	}
	
	

function retornaNombrePorId($id)
	{$link=conectar();
    $sw='';
    $sql="SELECT * FROM usuarios WHERE id_usuario = $id";
    $res=mysql_query($sql,$link);
    if($f=mysql_fetch_array($res))
      {$sw=$f['nombre_usuario'];}
    mysql_close($link);
    return $sw;
	
	}

function ingresarReceta($titulo,$resu,$contenido,$rutaDestino,$rutaDestinopdf ,$tipo,$id)
	{
		$x=0;
		$link=conectar();
		$sql="INSERT INTO receta (titulo_receta,resumen_receta,contenido_receta, fecha_receta, imagen_receta,estado_receta,pdf_receta, id_usuario, id_tipo) VALUES ('$titulo','$resu','$contenido', (SELECT CURDATE()), '$rutaDestino',1,'$rutaDestinopdf','$id', '$tipo')";
		$res=mysql_query($sql,$link);
		// Verificamos si se realizo el insert
		if(mysql_affected_rows()>0)
		{
			$x=1;
		}
		return $x;
		mysql_close($link);
	}

function ingresarArticulo($titulo,$contenido,$rutaDestino)
	{
		$x=0;
		$link=conectar();
		$sql="INSERT INTO receta (titulo_articulo,contenido_articulo, fecha_articulo, imagen_articulo) VALUES ('$titulo','$contenido', (SELECT CURDATE()), '$rutaDestino')";
		$res=mysql_query($sql,$link);
		// Verificamos si se realizo el insert
		if(mysql_affected_rows()>0)
		{
			$x=1;
		}
		return $x;
		mysql_close($link);
	}	

function cuentaReceta()
	{
		$link = conectar();
		$x=0;
		$sql ="SELECT * FROM receta WHERE estado_receta = 1";
		$res = mysql_query($sql, $link);
		$x= mysql_num_rows($res);
		mysql_close($link);
		return $x;
     }

function muestraReceta($start,$reg)
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT rec.id_receta, rec.titulo_receta, rec.fecha_receta, rec.id_tipo, tr.nombre_tipo 
			FROM receta rec, tipo_receta tr 
			WHERE rec.id_tipo = tr.id_tipo 
			AND estado_receta = 1 ORDER BY id_receta DESC  
			LIMIT " . $start . "," . $reg);
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}

	function muestraRecetaCod($codigo)
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=(" SELECT rec.id_receta, rec.titulo_receta, rec.resumen_receta, rec.contenido_receta, rec.imagen_receta, rec.fecha_receta, rec.id_tipo, tr.nombre_tipo 
			FROM receta rec, tipo_receta tr 
			WHERE rec.id_tipo = tr.id_tipo 
			AND id_receta = '$codigo'");
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}

	function modificarReceta($codigo, $titulo, $resu , $contenido, $rutaDestino, $tipo)
	{
		$link=conectar();
		$sql="UPDATE receta SET titulo_receta = '$titulo', resumen_receta='$resu',contenido_receta = '$contenido', imagen_receta = '$rutaDestino', id_tipo = '$tipo' WHERE id_receta = '$codigo'";
		$res=mysql_query($sql,$link);
		// Verificamos si se realizo el insert
		if(mysql_affected_rows()>0)
		{
			return '1';

		}
		mysql_close($link);

	}

	function eliminarReceta($codigo)
	{
		$link=conectar();
		$sql="DELETE FROM receta WHERE id_receta ='$codigo'";
		$res=mysql_query($sql,$link);
		if(mysql_affected_rows()>0)
		{
			return '1';
		}
		mysql_close($link);
	}

	function eliminarArticulo($codigo)
	{
		$link=conectar();
		$sql="DELETE FROM articulo WHERE id_articulo ='$codigo'";
		$res=mysql_query($sql,$link);
		if(mysql_affected_rows()>0)
		{
			return '1';
		}
		mysql_close($link);
	}

	function ingresarSobreMi($contenido, $rutaDestino)
	{
		$link=conectar();
		$sql="UPDATE sobremi SET sobre_mi = '$contenido', imagen_sobremi = '$rutaDestino' WHERE id_sobre = 1";
		$res=mysql_query($sql,$link);
		// Verificamos si se realizo el insert
		if(mysql_affected_rows()>0)
		{
			return '1';

		}
		mysql_close($link);

	}

	
	function aprobarPregunta($codigo)
	{
		$link=conectar();
		$sql="UPDATE pregunta SET estado_pregunta = '1' WHERE id_pregunta = '$codigo'";
		$res=mysql_query($sql,$link);
		// Verificamos si se realizo el insert
		if(mysql_affected_rows()>0)
		{
			return '1';

		}
		mysql_close($link);

	}

	function cuentaPreguntaNo()
	{
		$link = conectar();
		$x=0;
		$sql ="SELECT * FROM pregunta WHERE estado_pregunta = 0";
		$res = mysql_query($sql, $link);
		$x= mysql_num_rows($res);
		mysql_close($link);
		return $x;
     }

	function muestraPreguntaNo($start,$reg)
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT pre.id_pregunta,pre.usuario_pregunta,pre.correo_pregunta,pre.fecha_pregunta,pre.contenido_pregunta,pre.id_receta,rec.titulo_receta
			FROM pregunta pre, receta rec 
			WHERE pre.id_receta = rec.id_receta 
			AND estado_pregunta = 0 ORDER BY id_pregunta DESC  
			LIMIT " . $start . "," . $reg);
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}
    
    function cuentaPreguntaSi()
	{
		$link = conectar();
		$x=0;
		$sql ="SELECT * FROM pregunta WHERE estado_pregunta = 1";
		$res = mysql_query($sql, $link);
		$x= mysql_num_rows($res);
		mysql_close($link);
		return $x;
     }

	function muestraPreguntaSi($start,$reg)
	{
		$link=conectar();
		$a=array();
		$x=0;
		$sql=("SELECT pre.id_pregunta,pre.usuario_pregunta,pre.correo_pregunta,pre.fecha_pregunta,pre.contenido_pregunta,pre.id_receta,rec.titulo_receta
			FROM pregunta pre, receta rec 
			WHERE pre.id_receta = rec.id_receta 
			AND estado_pregunta = 1 ORDER BY id_pregunta DESC  
			LIMIT " . $start . "," . $reg);
		$res=mysql_query($sql, $link);
		while($f=mysql_fetch_array($res))
		{
		    $a[$x]=$f;
		    $x++;
		}
		mysql_close($link);
		return $a;
	}

	function ingresarRespuesta($contenido,$id_pregunta,$id_usuario)
	{
		$x=0;
		$link=conectar();
		$sql="INSERT INTO respuesta (contenido_respuesta,id_usuario,id_pregunta) VALUES ('$contenido','$id_usuario', '$id_pregunta')";
		$res=mysql_query($sql,$link);
		// Verificamos si se realizo el insert
		if(mysql_affected_rows()>0)
		{
			$x=1;
		}
		return $x;
		mysql_close($link);
	}

	function ingresarCategoria($cat)
	{
		$x=0;
		$link=conectar();
		$sql="INSERT INTO tipo_receta (nombre_tipo) VALUES ('$cat')";
		$res=mysql_query($sql,$link);
		// Verificamos si se realizo el insert
		if(mysql_affected_rows()>0)
		{
			$x=1;
		}
		return $x;
		mysql_close($link);
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

	 
?>