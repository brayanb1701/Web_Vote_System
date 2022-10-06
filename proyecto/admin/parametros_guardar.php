<?php
$campo=$_REQUEST["campo"];
	$servidor		= 'localhost';
	$usr_sistema	= 'root';
	$pass_sistema	= 'projects';
	$base_datos		= 'votaciones';
	$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
	if (!$conexion){
		header ("Location: parametros.php?mensaje=error de conexion.");
		exit();		   
	}
if ($campo == "b"){
	$act_blanco=$_REQUEST["act_blanco"];
//-- ------------------------------------------------------------------------------------------------
// -- Cambia dependiendo del ejercicio
		$sql= "UPDATE ".$base_datos.".parametros SET voto_blanco = '".$act_blanco."'";
		$sql = mysqli_query($conexion, $sql);	 // No cambia
//-- ------------------------------------------------------------------------------------------------
}
else{
	# es el parametro de fecha
	$anno=$_REQUEST["anno"];
	$mes=$_REQUEST["mes"];
	$dia=$_REQUEST["dia"];
	$fecha = $anno."-".$mes."-".$dia;
//-- ------------------------------------------------------------------------------------------------
// -- Cambia dependiendo del ejercicio
		$sql= "UPDATE ".$base_datos.".parametros SET fecha_cierre = '".$fecha."'";
		$sql = mysqli_query($conexion, $sql);	 // No cambia
//-- ------------------------------------------------------------------------------------------------


}
header("Location: parametros.php?mensaje=".$mensaje);
exit;
?>