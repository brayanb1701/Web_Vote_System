<?php 
	include_once("config.init.php");
//-- ------------------------------------------------------------------------------------------------
		$grado 	= isset($_POST['grado'])?$_POST['grado']:"";
		$alumno_id 	= isset($_POST['quienvoto'])?$_POST['quienvoto']:"";
		$elvoto 	= isset($_POST['elvoto'])?$_POST['elvoto']:"";
//-- ------------------------------------------------------------------------------------------------
$mensaje = 'Voto Registrado Con Exito.';
//-- ------------------------------------------------------------------------------------------------
		$sql 		= "INSERT ".$base_datos.".registro(grado, voto_id) "
					 ."VALUES($grado, $elvoto)";
					// echo $sql;
		$sql 	= mysqli_query($conexion, $sql);
		
		
		$sql 		= "INSERT ".$base_datos.".alumno_voto (id) "
					 ."VALUES($alumno_id)";
					// echo $sql;
		$sql 	= mysqli_query($conexion, $sql);
		//mysql_free_result($sql);
//-- ------------------------------------------------------------------------------------------------

header("Location: index.php?error=".$mensaje);
exit();

?>