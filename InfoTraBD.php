<?php
	
	session_start();
	require 'conexion.php';
	
	/*if(!isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}*/
	
	$sql = "SELECT * FROM informacion";
	$result=$mysqli->query($sql);
	
	$bandera = false;
	
	if(!empty($_POST))
	{
		$correo = $_POST['correo'];
		$tunombre = $_POST['tunombre'];
		$texto = $_POST['texto'];
		$error = '';
		
					
				
		$sqlUsuario = "INSERT INTO informacion (correo, tunombre, texto) VALUES('$correo','$tunombre', '$texto')";
			$resultUsuario = $mysqli->query($sqlUsuario);
			
			if($resultUsuario>0)
			$bandera = true;
			else
			$error = "Error al Registrar";
		}
 echo '<a href="index.php">Pagina Principal</a>';
	
?>