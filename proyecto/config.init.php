<?php	
	$servidor		= 'localhost';
	$usr_sistema	= 'root';
	$pass_sistema	= 'projects';
	$base_datos		= 'votaciones';
	
	$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
	if (!$conexion){
		header ("Location: index.php?mensaje=error de conexion.");
		exit();		   
	}
?>