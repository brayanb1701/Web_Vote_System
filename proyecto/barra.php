<?php $camino=""; require_once($camino."disenno_cabecera.php"); ?>
<body>
<?php include_once($camino."disenno_cabecera_body.php"); ?>
<b>ADMINISTRADOR</b></div>

<div id="menu">
 &nbsp;[&nbsp;<a href="admin/index.php">Inicio</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="admin/candidatos.php">Inscripcion Candidato</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<span class="titleadmin">Estadisticas</span>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="salir.php">Cerrar Sesion</a>&nbsp;]&nbsp;
</div>


<?php $porcentaje=isset($_REQUEST["porcentaje"])?$_REQUEST["porcentaje"]:25;
if ($porcentaje>100) $porcentaje=100;
if ($porcentaje<0) $porcentaje=0;
?>
<?php include_once("librerias/libreria_barra.php"); ?>

<?php require_once($camino."disenno_footer.php"); ?>

		

