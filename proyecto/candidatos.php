<?php $camino=""; require_once("disenno_cabecera.php"); ?>
<?php require_once("disenno_cabecera_body.php"); ?>

<?php
	$matricula			= $_SESSION["quien_soy"];

include_once("config.init.php");
//-- ------------------------------------------------------------------------------------------------
// -- Cambia dependiendo del ejercicio
		$sql= "SELECT grado, id, nombre1, apellido1, matricula "
			  ."FROM ".$base_datos.".alumnos "
			  ."WHERE activo = 'S' AND "
			  ."matricula = '".$matricula."'";   
		$sql = mysqli_query($conexion, $sql);	 // No cambia

//-- ------------------------------------------------------------------------------------------------
?>


<?php
		while($rs = mysqli_fetch_array($sql)) { 
			$grado		= $rs[0];
			$id			= $rs[1];
			$nombre1	= $rs[2];
			$apellido1 	= $rs[3];
			$matricula 	= $rs[4];
		/*echo "[".$grado."]-"."[".$id."]-"."[".$nombre1."]-"."[".$apellido1."]-"."[".$matricula."]-"
		."[".$nombre1."]".'<img width="300px" heigth="300px"src="imagenes/imagenes/img' . ($matricula-1000).'.jpg">'
		."<br>";*/
		echo "<table border='0'>
		<tr>
		<td rowspan='3'><img width='150px' heigth='150px' src='imagenes/imagenes/img" . ($matricula-1000).".jpg'></td>
		<td>Grado: ".$grado."</td>
		</tr>
		
		<tr>
		<td>Nombre: ".$nombre1."</td></tr><tr>
		<td>Apellido: ".$apellido1."</td></tr>
		
		</table>"
	
?>

<?php }?>

<?php



//-- ------------------------------------------------------------------------------------------------
// -- Cambia dependiendo del ejercicio
		$sql= "SELECT  voto_blanco "
			  ."FROM ".$base_datos.".parametros ";
  
//echo $sql;
		$sql = mysqli_query($conexion, $sql);	 // No cambia

//-- ------------------------------------------------------------------------------------------------
?>


<?php
		while($sr = mysqli_fetch_array($sql)) { 
			$voto_blanco		= $sr[0];	
?>

<?php }?>

<?php
$tipo ="11";
if ($grado < 6 )$tipo ="5";


//-- ------------------------------------------------------------------------------------------------
// -- Cambia dependiendo del ejercicio
		$sql= "SELECT a.nombre1, a.nombre2, a.apellido1, a.apellido2, a.grado, c.id, c.alumnos_id, c.n_votacion, c.color "
			  ."FROM ".$base_datos.".candidatos as c, ".$base_datos.".alumnos as a "
			  ."WHERE c.alumnos_id = a.matricula AND "
			  ."a.activo = 'S' AND "
			  ."c.tipo = '".$tipo."'";   
		$sql = mysqli_query($conexion, $sql);	 // No cambia
		$cant_candid=mysqli_num_rows($sql)+1;
//-- ------------------------------------------------------------------------------------------------
?>
<hr>

<table width="100%" border="1">
<tr>
<?php
if (/*_blanco*/$voto_blanco == "S"){
echo '<td>
<form name="form1" method="post" action="registro_voto.php">
<table width="100%" border="0"><tr><td><center><img src="imagenes/candidato_blanco.jpg"width="150px" height="150 px"></center></td></tr><tr><td><center>Voto en Blanco</center><input type="hidden" name="elvoto" value="0"><input type="hidden" name="quienvoto" value="'.$matricula.'"><input type="hidden" name="grado" value="'.$grado.'"></td></tr><tr><td><center><input type="submit" value="Oprima aqui para votar por voto en blanco" onclick="confirm1();"></center></td></tr></table>
</form>
</td>';
}

		while($rs = mysqli_fetch_array($sql)) { 
			$nombre1	= $rs[0];
			$nombre2	= $rs[1];

			$apellido1 	= $rs[2];
			$apellido2 	= $rs[3];
			$grado_v=$rs[4];
			$candidato_id 	= $rs[5];

			$alumnos_id	= $rs[6];

			$nombre = $nombre1;
			if (strlen($nombre2)!=0) $nombre = $nombre . " " . $nombre1;
			$nombre = $nombre . " " . $apellido1;
			if (strlen($apellido2)!=0) $nombre = $nombre . " " . $apellido2;


			$n_votacion = $rs[7];
			$color=$rs[8];
echo '<td bgcolor="'.$color.'">
<form name="form1" method="post" action="registro_voto.php">
<table width="100%" border="0"><tr><td><center><img width="180px" heigth="180px" src="imagenes/imagenes/img' . ($alumnos_id-1000).'.jpg"></center></td></tr><tr><td><strong><center>'.$nombre.'</center></strong><input type="hidden" name="elvoto" value="'.$n_votacion.'"><input type="hidden" name="quienvoto" value="'.$matricula.'"><input type="hidden" name="grado" value="'.$grado.'"></td></tr><tr><td><center><input type="submit" value="Oprima aqui para votar por '.$nombre.'" "></center></td></tr></table>
</form>
</td>';
} 




?>
</tr>
<tr>
<td  colspan="<?PHP  echo $cant_candid; ?>"><center><form action="salir.php"><input type="submit" value="Regresar"></form></center></td>
</tr>
</table>


<?php require_once("disenno_footer.php"); ?>



<script>
if (history.forward(1)) {
	location.replace(history.forward(1));
}
</script>
