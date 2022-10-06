<html>
<body>

<?php

include_once("../config.init.php");
// process form
$grado 	= isset($_POST['grado'])?$_POST['grado']:"";
$id	= isset($_POST['id'])?$_POST['id']:"";
$color	= isset($_POST['color'])?$_POST['color']:"";
$numero= isset($_POST['numero'])?$_POST['numero']:"";

$sql= "SELECT * "
			  ."FROM ".$base_datos.".alumnos "
			  ."WHERE matricula = '".$id."' AND activo = 'S' "
			  ." AND grado='$grado'";  
			  
			  $sql = mysqli_query($conexion, $sql);	 // No cambia
			  $num_rows=mysqli_num_rows($sql);
	if($num_rows==0){
		header("Location: candidatos.php?error=No se encontro el estudiante en la base de datos.");
		exit;
	} 	
	else{
		$sql= "SELECT * "
			  ."FROM ".$base_datos.".candidatos "
			  ."WHERE alumnos_id = '".$id."' AND "
			  ."tipo='$grado'";  
			 
		$sql = mysqli_query($conexion, $sql);	 // No cambia
		$num_rows=mysqli_num_rows($sql);
		if($num_rows!=0){
			header("Location: candidatos.php?error=Ya se encuentra registrado el estudiante como candidato.");
			exit;
		} 	
		else{
			$mensaje = 'Datos registrados con exito.';
			
				
			$sql = "INSERT ".$base_datos.".candidatos(alumnos_id, tipo, n_votacion, color) "
				  ."VALUES ('$id', '$grado', '$numero', '$color')";
				
			$sql 	= mysqli_query($conexion, $sql);

		}

		header("Location: candidatos.php?error=".$mensaje);
		exit();
	}
?>

</body>
</html>