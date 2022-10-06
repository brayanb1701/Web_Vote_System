<?php $camino=""; require_once($camino."disenno_cabecera_index.php"); ?>
<script>
function inicio(){
	document.getElementById("user").focus();
}
</script>
<body onLoad="inicio();">
<?php include_once("disenno_cabecera_body.php");?>
    <center><br><br><br><br><br>
        <form action="datos.php" method="post" id="formulario" name="formulario" onClick="inicio();">
        <input type="password" autocomplete="off" align="center" name="user" id="user">
        </form>
    </center>
<?php require_once("disenno_footer.php"); ?>

<?php 
$error = isset($_REQUEST["error"])?$_REQUEST["error"]:"";

if ($error != ""){
	if ($error=="S"){$error="Hace falta codigo para poder ingresar al sistema";}
?>
	<script>
		alert("<?php echo $error; ?>");
	</script>

<?php } ?>