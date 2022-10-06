
<?php
$camino="../";
include_once($camino."config.init.php");
$tipo=5;
while($tipo==5 || $tipo==11){
if($tipo==5) $start=1;
else $start=6;
if($tipo==11) unset($color, $candidatos);

$sql= "SELECT n_votacion,color FROM ".$base_datos.".candidatos WHERE tipo='$tipo' ";
//echo $sql;
$sql = mysqli_query($conexion, $sql);	 // No cambia
$total=0;
$first=TRUE;
while($rs = mysqli_fetch_array($sql)) { 
$id_candidatos=$rs[0];
$total_cand_grad=($tipo+7);
$estadisticas[$total_cand_grad][$id_candidatos]=0;
$color[$id_candidatos]=$rs[1];
$candidatos[$id_candidatos]=$id_candidatos;
	for($i=$start; $i<=$tipo; $i++){
		$sql2= "SELECT count(*) "."FROM ".$base_datos.".registro "."WHERE voto_id = '$id_candidatos' AND grado='$i'";
		$sql2 = mysqli_query($conexion, $sql2);	 // No cambia
		
		while($rz = mysqli_fetch_array($sql2)) { 
			$cantidad_votos=$rz[0];
			if($first){
				$votos_grado[$i]=$cantidad_votos;
			}
			else $votos_grado[$i]=$votos_grado[$i]+$cantidad_votos;
			$estadisticas[$i][$id_candidatos] = $cantidad_votos;
			$estadisticas[$total_cand_grad][$id_candidatos]=$estadisticas[$total_cand_grad][$id_candidatos]+$cantidad_votos;
			//echo "Candidato: ".$id_candidatos." votos = " .$cantidad_votos. "<br>"; 
			
		}
		
	}
	
	$total+=$estadisticas[$total_cand_grad][$id_candidatos];
	$first=false;
}

//-- ------------------------------------------------------------------------------------------------
if($tipo==5) $nivel="PRIMARIA";
else $nivel="BACHILLERATO";
echo "<h2>$nivel</h2>";

?>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart<?php echo $tipo; ?>);

      function drawChart<?php echo $tipo; ?>() {
	  	
		var first=['Grado'];
		
		<?php
			foreach($candidatos as $id){
		?>
				first.push('Candidato <?php echo $id; ?>');
				
				<?php
			} ?>
			var allin=[first];
			
		<?php 
		
		foreach($estadisticas as $key=>$est){
				if($key>=$start && $key<=$tipo){
					?> var g<?php echo $key; ?>=['Grado <?php echo $key; ?>']; 
					<?php
					foreach($est as $key2=>$votos){ ?>
						g<?php echo $key; ?>.push(<?php echo $votos; ?>); <?php
					}
				?> allin.push(g<?php echo $key; ?>); <?php
				}
				
			}
		?>
		
        var data = google.visualization.arrayToDataTable(allin);
		<?php
		$n1=true;
		foreach($color as $c){
			if($n1==true){ ?>
			var colores= ['#<?php echo $c; ?>'];
			<?php $n1=false;
			}
			else{
			?>
			colores.push('#<?php echo $c; ?>');
			<?php 
			}
		 } ?>
        var options = {
          chart: {
            title: 'RESULTADOS VOTACIONES <?php echo $nivel; ?>',
            subtitle: 'Resultados por Grado'
          },
          bars: 'horizontal', // Required for Material Bar Charts.
		  colors: colores
        };

        var chart = new google.charts.Bar(document.getElementById('<?php echo $nivel; ?>'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
		
      }
    </script>
	
	<div id="<?php echo $nivel; ?>" style="width: 900px; height: 500px;"></div>

<?php

$keyact=key($estadisticas[$total_cand_grad]);
while(array_key_exists($keyact, $estadisticas[$total_cand_grad])==true){
echo "<h4>No Total de votos por el candidato ".$keyact.": ".$estadisticas[$total_cand_grad][$keyact]."</h4>";
next($estadisticas[$total_cand_grad]);
$keyact=key($estadisticas[$total_cand_grad]);


}

echo "<br>";

$tipo+=6;
}




?>
