<?php
$con = mysqli_connect("localhost","root","","tienda_deportes");
echo "<br><center>";
if (!$con) 
	{
		die('No se establecio la conexión con el servidor: '. mysqli_error());
	}
$sql="DELETE FROM proveedores WHERE clave_prov = '{$_POST["clave_prov"]}' ";

if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
	{
		die('Error: '.mysqli_error($con));
	}
echo "Registro borrado<br><br>";
echo "<a href='borrar_proveedores.html'>Regresar</a>";
mysqli_close($con);
?>
