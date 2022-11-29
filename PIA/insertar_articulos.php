<?php
$con = mysqli_connect("localhost","root","","tienda_deportes");
if (!$con) 
	{
		die('No se establecio la conexión con el servidor: '. mysqli_error());
	}
$sql="INSERT INTO articulos 
	VALUES('$_POST[clave_art]','$_POST[desc_art]','$_POST[precio_art]','$_POST[obs_art]')";

if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
	{
		die('Error: '.mysqli_error($con));
	}
echo "<center>";
echo "1 registro agregado<br>";
echo "<a href='consulta_articulos.php'>Ver Registros</a>";
mysqli_close($con);
?>