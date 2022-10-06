<?php $camino="../"; require_once($camino."disenno_cabecera.php"); ?>
<body>
<?php include_once($camino."disenno_cabecera_body.php"); ?>
<b>ADMINISTRADOR</b></div>

<div id="menu">
 &nbsp;[&nbsp;<a href="index.php">Inicio</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<span class="titleadmin">Inscripcion Candidato</span>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="parametros.php">Parámetros</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="barra.php">Estadisticas</a>&nbsp;]&nbsp;&nbsp;&nbsp;[&nbsp;<a href="../salir.php">Cerrar Sesion</a>&nbsp;]&nbsp;
</div>
<form method="post" action="guardar_candidato.php"> 
<ul>
<li><b>Candidato: </b>
<p>C&oacute;digo Carn&eacute;: <input type="text" name="id"><br></p>
<p>Grado:<select name="grado">
<option value="0">Ninguno</option>
<option value="5">5</option>
<option value="11">11</option>
</select>
<br></p>
<p>Color: <select name="color">
<option value="0">Ninguno</option>
<option style="color:#FFFF00" value="FFFF00">Amarillo</option>
<option style="color:#0000FF" value="0000FF">Azul</option>
<option style="color:#FF0000" value="FF0000">Rojo</option>
<option style="color:#00CC00" value="00CC00">Verde</option>
<option style="color:#FF6600" value="FF6600">Naranja</option>
<option style="color:#9900CC" value="9900CC">Morado</option>
</select><br></p>
<p>Numero:<select name="numero">
<option value="0">Ninguno</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select><br></p>
</li>
</ul>


<div align="center"><input type="Submit" name="enviar" value="Guardar"></div>
</form>
<?php require_once($camino."disenno_footer.php"); ?>

