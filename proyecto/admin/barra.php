<?php
//header("Refresh: 30; URL='barra.php'");
?>
<?php 
$camino="../"; require_once($camino."disenno_cabecera.php"); ?>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="loader.js"></script>
<body >
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

<div id="receptor"></div>


<?php require_once($camino."disenno_footer.php"); ?>

<script>
first=true;
if(first==true){
	$( "#receptor" ).load( "reload.php" );
	first=false;
}
/*
setInterval(function() {
   $( "#receptor" ).load( "reload.php" );
},30000);
*/
</script>
