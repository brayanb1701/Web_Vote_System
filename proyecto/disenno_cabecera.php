<?php  
session_start();
error_reporting(E_ALL);
ob_start();

require_once ($camino."../cgi-bin/parametros_svc/configuracion.php"); 
if ($_SESSION["pezmasgato"] == false){//--Variable de seguridad)
	header("Location: ".$camino."index.php?error=Error al ingresar al Sistema SVC");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo _titulo_aplicacion;?></title>
</head>
<script>
window.history.forward (1);
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $camino;?>css/estilo.css">