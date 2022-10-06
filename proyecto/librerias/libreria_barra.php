<form action="barra.php" method="post">
<br><input type="text" id="porcentaje" name="porcentaje" value="<?php echo $porcentaje;?>" >
<br><input type="submit" value="boton">
<table width="361px" border="0">
<tr>
<td>
<table width="<?php echo $porcentaje;?>%" border="0">
	<tr>
		<td background="../imagenes/degrade.png" align="center"><?php echo $porcentaje;?>%</td>
	</tr>
</table>	
</td>
</tr>
</table>
</form>