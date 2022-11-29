<?php
$con = mysqli_connect("localhost","root","","tienda_deportes");
if (!$con) 
	{
		die('No se establecio la conexión con el servidor: '. mysqli_error());
	}
$sql="INSERT INTO ventas
	VALUES('$_POST[clave_vta]','$_POST[cantidad_vta]','$_POST[precio_vta]','$_POST[numeroventa_vta]')";

if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
	{
		die('Error: '.mysqli_error($con));
	}
echo "<center>";
echo "1 registro agregado<br>";
echo "<a href='consulta_ventas.php'>Ver Registros</a>";
mysqli_close($con);
?>