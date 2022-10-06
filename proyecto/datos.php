<?php session_start();
error_reporting(E_ALL);
ob_start();
$_SESSION["pezmasgato"] = false;//--Variable de seguridad
$camino=""; 
$user=$_REQUEST["user"];
if($user=="000"){
	$_SESSION["pezmasgato"] = true;//--Variable de seguridad
	header("Location: ".$camino."admin/index.php");
	exit;
}
else{
	//-- Solo para alumnos

	include_once("config.init.php");
# Verifica que el codigo que ingreso esta validado en la tabla de alumnos
			$sql= "SELECT * "
			  ."FROM ".$base_datos.".alumnos "
			  ."WHERE matricula = '".$user."' AND "
			  ."activo = 'S'";  
			  $sql = mysqli_query($conexion, $sql);	 // No cambia
			  $num_rows=mysqli_num_rows($sql);
			if($num_rows==0){
				header("Location: index.php?error=Usuario No existe en el Sistema de Votaciones.");
				exit;
			} 	
			else{
//-- ------------------------------------------------------------------------------------------------
		// -- Cambia dependiendo del ejercicio
				$sql= "SELECT  fecha_cierre "
					  ."FROM ".$base_datos.".parametros ";
		  
		//echo $sql;
				$sql = mysqli_query($conexion, $sql);	 // No cambia

		//-- ------------------------------------------------------------------------------------------------




				while($sr = mysqli_fetch_array($sql)) { 
					$fecha_cierre		= $sr[0];	

		}
		if (date("Y-m-d")<=$fecha_cierre){

				if($user>=1000){//-- Codigo del carné
					$servidor		= 'localhost';
					$usr_sistema	= 'root';
					$pass_sistema	= 'projects';
					$base_datos		= 'votaciones';
					$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
					if (!$conexion){
					header ("Location: index.php?mensaje=error de conexion.");
					exit();		   
					}

				
					//-- ------------------------------------------------------------------------------------------------
					// -- Cambia dependiendo del ejercicio
					$sql= "SELECT * "
					  ."FROM ".$base_datos.".alumno_voto "
					  ."WHERE id=".$user." ";  
					  echo $sql;
					  $sql = mysqli_query($conexion, $sql);	 // No cambia
					  $num_rows=mysqli_num_rows($sql);
					if($num_rows>0){
						header("Location: index.php?error=Su voto ya ha sido registrado");
						exit;
					} 
				//echo $sql;
				

		//-- ------------------------------------------------------------------------------------------------
				?>


				<?php
				while($rs = mysqli_fetch_array($sql)) { 
					$alumno_id		= $rs[0];

					?>

				<?php }?>

				<?php
					
					$_SESSION["pezmasgato"] = true;//--Variable de seguridad
					$_SESSION["quien_soy"] = $user;
					header("Location: ".$camino."candidatos.php");
					exit;

				}
				
				
				if(strlen($user)=="0"){
					$error="S";
					header("Location: ".$camino."index.php?error=".$error);
				exit;
				}

			}
			else{
				header("Location: ".$camino."index.php?error=Fecha no disponible para ingresar al sistema ");
				exit;
			}

			}

}
?>
























		