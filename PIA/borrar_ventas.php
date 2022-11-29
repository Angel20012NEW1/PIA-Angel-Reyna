<?php
$con = mysqli_connect("localhost","root","","tienda_deportes");
echo "<br><center>";
if (!$con) 
	{
		die('No se establecio la conexión con el servidor: '. mysqli_error());
	}
$sql="DELETE FROM ventas WHERE clave_vta = '{$_POST["clave_vta"]}' ";

if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
	{
		die('Error: '.mysqli_error($con));
	}
echo "Registro borrado<br><br>";
echo "<a href='borrar_ventas.html'>Regresar</a>";
mysqli_close($con);
?>