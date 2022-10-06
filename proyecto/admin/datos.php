<?php
//-- variables para conectarse a la base de datos
$servidor	= 'localhost';
$base_datos	= 'votaciones';
$tabla	= 'parametros';
$usr_sistema	= 'root';
$pass_sistema	= 'projects'; 
//-- Conexion a la Base de datos segun variables declaradas 
$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
//-- Captura de las variables del formulario.
$voto_blanco= $_POST['act_blanco'];
//$fecha_cierre= $_POST['anno', 'mes', 'dia'];


//-- Consulta Sql para guardar el registro o datos digitados.
$sql = "Update parametros Set voto_blanco='".$voto_blanco."' "; 
$sql = mysqli_query($conexion, $sql); 
//-- Se devuelve a la pagina que inicial.
header ("Location: parametros.php?mensaje=Actualizacion Exitosa");
exit(); 
}
?>