	<tr>
	<td><center><img src="imagenes/candidato1.jpg" width="150px"height="150 px"></center></td>
	<td><center><img src="imagenes/candidato2.jpg" width="150px" height="150 px"></center></td>
	<?php if (/*_blanco*/$voto_blanco == "S"){?>
	<td><center><img src="imagenes/candidato_blanco.jpg"width="150px" height="150 px"></center></td>
	<?php }?>
	</tr>


	<tr>
	<td><center>John F. Kennedy</center></td>
	<td><center>Alvaro Uribe</center></td>
	<?php if (/*_blanco*/$voto_blanco == "S"){?>
	<td><center>Voto en Blanco</center></td>
	<?php }?>
	</tr>

	<tr>
	<td><center><form name="form1" method="post" action="registro_voto.php">
	<input type="hidden" name="elvoto" value="1">
	<input type="hidden" name="matricula" value="<?php echo $matricula;?>">
	<input type="submit" value="Oprima aqui para votar por John F. Kennedy" onclick="confirm1();">
	</form></center></td>
	<td><center><form name="form3" method="post" action="registro_voto.php">
	<input type="hidden" name="elvoto" value="2">
	<input type="hidden" name="matricula" value="<?php echo $matricula;?>">
	<input type="submit" value="Oprima aqui para votar por Uribe" onclick="confirm2();">
	</form></center></td>

	<?php if (/*_blanco*/$voto_blanco == "S"){?>
	<td><center>

	<form name="form2" method="post" action="registro_voto.php">
	<input type="hidden" name="elvoto" value="3">
	<input type="hidden" name="matricula" value="<?php echo $matricula;?>">
	<input type="submit" value="Oprima aqui para votar por voto en blanco" onclick="confirm3();">
	</form>

	</center></td>
	<?php }?>
	</tr>