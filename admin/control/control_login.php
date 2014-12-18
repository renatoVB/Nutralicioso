<?php session_start();

  include_once('../modelo/funciones.php');


$sw = validaLogin($_POST['login-username'],$_POST['login-password']);

if($sw)
	{
		$_SESSION['id_usuario']= validaLogin($_POST['login-username'],$_POST['login-password']);
		$_SESSION['nombre_usuario']= retornaNombrePorId($_SESSION['id_usuario']);
		
		
			echo "<script>
		 location.href='../vista/inicio_admin.php';
		 alert('Bienvenido Administrador');
		 </script>";

		}
         
	 else {
			
		
		 echo "<script>alert('Usuario Erroneo o No Existe'); 
		         location.href='../index.php';</script>";
		
		}
	
	
?>