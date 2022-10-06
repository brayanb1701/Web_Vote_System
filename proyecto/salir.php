<?php session_start();
error_reporting(E_ALL);
ob_start();
session_destroy();
$camino="";
header("Location: ".$camino."index.php");
		exit;

?>