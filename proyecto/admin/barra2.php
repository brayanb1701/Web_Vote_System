<?php $camino="../"; require_once($camino."disenno_cabecera.php"); ?>
<body>
<?php include_once($camino."disenno_cabecera_body.php"); ?>
<b>ADMINISTRADOR</b></div>

<div id="menu">
 &nbsp;[&nbsp;<a href="index.php">Inicio</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="candidatos.php">Inscripcion Candidato</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="parametros.php">Parámetros</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<span class="titleadmin">Estadisticas</span>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="../salir.php">Cerrar Sesion</a>&nbsp;]&nbsp;
</div>
<br>



<?php $porcentaje=isset($_REQUEST["porcentaje"])?$_REQUEST["porcentaje"]:25;
if ($porcentaje>100) $porcentaje=100;
if ($porcentaje<0) $porcentaje=0;
?>

<?php // include_once($camino."/librerias/libreria_barra.php"); ?>

<?php
$porcentaje_tabla="100";
$porcentaje_primaria=round(((450*$porcentaje_tabla)/950),2);

?>
<!--<table>
<tr>
<td>Total alumnos</td>
<td><img src="../imagenes/blanco.png"></td>
<td>950</td>
<td><img src="../imagenes/blanco.png"></td>
<td width="361px"><table width="<?php //echo $porcentaje_tabla.'%'; ?>" border="0">
	<tr>
		<td background="../imagenes/degrade.png" align="center"><?php //echo $porcentaje_tabla.'%'; ?></td>
	</tr>
</table>	</td>
</tr>
<tr>
<td>Total primaria</td>
<td><img src="../imagenes/blanco.png"></td>
<td>450</td>
<td><img src="../imagenes/blanco.png"></td>
<td width="361px"><table width="<?php //echo $porcentaje_primaria.'%'; ?>" border="0">
	<tr>
		<td background="../imagenes/degrade.png" align="center"><?php //echo $porcentaje_primaria.'%'; ?></td>
	</tr>
</table>	</td>
</tr>
</table>
-->
<?php


include_once($camino."config.init.php");
$tipo=5;
while($tipo==5 || $tipo==11){
if($tipo==5) $start=1;
else $start=6;
$sql= "SELECT n_votacion FROM ".$base_datos.".candidatos WHERE tipo='$tipo' ";
//echo $sql;
$sql = mysqli_query($conexion, $sql);	 // No cambia
$total=0;
$first=TRUE;
while($rs = mysqli_fetch_array($sql)) { 
$id_candidatos=$rs[0];
$total_cand_grad=($tipo+7);
$estadisticas[$total_cand_grad][$id_candidatos]=0;

	for($i=$start; $i<=$tipo; $i++){
		$sql2= "SELECT count(*) "."FROM ".$base_datos.".registro "."WHERE voto_id = '$id_candidatos' AND grado='$i'";
		$sql2 = mysqli_query($conexion, $sql2);	 // No cambia
		
		while($rz = mysqli_fetch_array($sql2)) { 
			$cantidad_votos=$rz[0];
			if($first){
				$votos_grado[$i]=$cantidad_votos;
			}
			else $votos_grado[$i]=$votos_grado[$i]+$cantidad_votos;
			$estadisticas[$i][$id_candidatos] = $cantidad_votos;
			$estadisticas[$total_cand_grad][$id_candidatos]=$estadisticas[$total_cand_grad][$id_candidatos]+$cantidad_votos;
			//echo "Candidato: ".$id_candidatos." votos = " .$cantidad_votos. "<br>"; 
			
		}
		
	}
	
	$total+=$estadisticas[$total_cand_grad][$id_candidatos];
	$first=false;
}

//-- ------------------------------------------------------------------------------------------------
if($tipo==5) $nivel="PRIMARIA";
else $nivel="BACHILLERATO";
echo "<h2>$nivel</h2><br>";
foreach($estadisticas as $key=>$est){
	if($key>=$start && $key<=$tipo){
	echo "<h3>Grado: $key</h3><br>";
	foreach($est as $key2=>$votos){
		if($votos_grado[$key]==0) $porcentaje=0;
		else $porcentaje = round(($votos * 100) / $votos_grado[$key]); 
		echo "Candidato: ". $key2 . " -- No. Votos: ". $votos."  [ ". $porcentaje. "% ]  
		<table>
		<tr><td width='361px'>
			<table width=". $porcentaje."% border='0'>
			<tr>
			<td height='20px' background='../imagenes/degrade.png' align='center'></td>
			</tr>
			</table>
		</td></tr>
		</table><br><br>";
	}
	}
	
}
$keyact=key($estadisticas[$total_cand_grad]);
while(array_key_exists($keyact, $estadisticas[$total_cand_grad])==true){
echo "No Total de votos por el candidato ".$keyact.": ".$estadisticas[$total_cand_grad][$keyact]."<br>";
next($estadisticas[$total_cand_grad]);
$keyact=key($estadisticas[$total_cand_grad]);
}


$tipo+=6;
}




?>

<?php require_once($camino."disenno_footer.php"); ?>

