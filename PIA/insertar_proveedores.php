<?php
$con = mysqli_connect("localhost","root","","tienda_deportes");
if (!$con) 
	{
		die('No se establecio la conexión con el servidor: '. mysqli_error());
	}
$sql="INSERT INTO proveedores 
	VALUES('$_POST[clave_prov]','$_POST[nombre_prov]','$_POST[direccion_prov]','$_POST[telefono_prov]','$_POST[email_prov]')";

if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
	{
		die('Error: '.mysqli_error($con));
	}
echo "<center>";
echo "1 registro agregado<br>";
echo "<a href='consulta_proveedores.php'>Ver Registros</a>";
mysqli_close($con);
?>