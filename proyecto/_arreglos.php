<?php 
$h='b';
include_once("config.init.php");
$sql= "SELECT id, grado "
	  ."FROM ".$base_datos.".alumnos ";
	  $sql = mysqli_query($conexion, $sql);

while($rs = mysqli_fetch_array($sql)) { 
			$id		= $rs[0];
			$grado	= $rs[1];
			if ($h=="a")
					$h = "b";
			else 
				$h = "a";
			echo $id.$grado. $h. "<br>";
			$sql2= "UPDATE ".$base_datos.".alumnos SET grado='".$grado. $h."' WHERE id=".$id;
	  $sql2 = mysqli_query($sql2, $conexion);
}


?>
