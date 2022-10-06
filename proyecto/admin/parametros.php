<?php $camino="../"; require_once($camino."disenno_cabecera.php"); ?>

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
// -- Cambia dependiendo del ejercicio
		$sql= "SELECT voto_blanco, fecha_cierre "
			  ."FROM ".$base_datos.".parametros";   
		$sql = mysqli_query($conexion, $sql);	 // No cambia
		while($rs = mysqli_fetch_array($sql)) { 
			$voto_blanco	= $rs[0];
			$fecha_cierre	= $rs[1];
			$anno = substr($fecha_cierre,0,4);
			$mes = substr($fecha_cierre,5,2);
			$dia = substr($fecha_cierre,8,2);
		}
//-- ------------------------------------------------------------------------------------------------
?>

<body>
<?php include_once($camino."disenno_cabecera_body.php"); ?>
<b>ADMINISTRADOR</b></div>

<div id="menu">
 &nbsp;[&nbsp;<a href="candidatos.php">Inicio</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="candidatos.php">Inscripcion Candidato</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<span class="titleadmin">Par�metros</span>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="barra.php">Estadisticas</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="../salir.php">Cerrar Sesion</a>&nbsp;]&nbsp;
</div>
<br>
<div>
<form action="parametros_guardar.php" method="post">
�Desea activar el voto en blanco?     <select id="act_blanco" name="act_blanco">
<option id="act_blanco" name="act_blanco" <?php if ($voto_blanco=="S") echo " selected ";?> value="S">S�</option>
<option id="act_blanco" name="act_blanco" <?php if ($voto_blanco=="N") echo " selected ";?>value="N">No</option>
</select>
<input type="submit" value="Enviar">
<input type="hidden" value="b" name="campo">
</form>
<br>
<form action="parametros_guardar.php" method="post">
Fecha de cierre de Sistema Votaciones (aaaa/mm/dd)    
<select name="anno">
<?php
for($i=2015; $i<=(date("Y")+1); $i++){
	$seleccion = "";
	if ($anno == $i) $seleccion = " selected ";
echo "<option ".$seleccion." value='".$i."'>". $i ."</option>";
}
?>
</select>
<select name="mes">
<?php
for($i=1; $i<=12; $i++){
$ver=$i;
$seleccion = "";
	if ($mes == $i) $seleccion = " selected ";
if(strlen($ver)==1)$ver="0".$i;
echo "<option ".$seleccion." value='".$i."'>". $ver ."</option>";
}
?>
</select>
<select name="dia">
<?php
for($i=1; $i<=30; $i++){
$ver=$i;
$seleccion = "";
	if ($dia == $i) $seleccion = " selected ";
if(strlen($ver)==1)$ver="0".$i;
echo "<option ".$seleccion." value='".$i."'>". $ver ."</option>";
}
?>
</select>
<input type="submit" value="Enviar">
<input type="hidden" value="f" name="campo">
</form>
</div>

<?php require_once($camino."disenno_footer.php"); ?>

