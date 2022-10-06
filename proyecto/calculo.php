<?php 

$user=strtolower($_REQUEST["user"]);

/*echo "(" . user . ")";
$calcular=($valor-32)/1.8;*/
$error="N";
if($user=="1293"){
#header("Location: uno.php?a=".$user);
	$error="S";

}
	header("Location: ejer.php?error=".$error);
exit;

/*
if($user=="goyo" && $pass=="abcd"){
header("Location: dos.php");
exit;
}
else{
header("Location: ejer.php?calcular=".falso);
exit;	
}



/*echo "hola";
header("Location: index.php?calcular=".$calcular);
exit;
*/
?>