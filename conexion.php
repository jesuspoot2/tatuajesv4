<?php
	$mysqli=new mysqli("localhost","root","0672JesusPoot","estudiodetatuajes"); 
	
	if(mysqli_connect_error()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>