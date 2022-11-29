<?php
$con = mysqli_connect("localhost","root","","tienda_deportes");
if (!$con) 
	{
		echo "fallo";
		die(mysqli_error());
	}
	$CLAVE=$_POST['clave'];
	$NOMBRE=$_POST['nombre'];
	$DIRECCION=$_POST['direccion'];
	$TELEFONO=$_POST['telefono'];
	$EMAIL=$_POST['email'];

mysqli_query($con, "UPDATE proveedores
	SET clave_prov='$CLAVE', nombre_prov='$NOMBRE', direccion_prov='$DIRECCION', telefono_prov='$TELEFONO', email_prov='$EMAIL'
	WHERE clave_prov='$CLAVE'");

header("Location:actualizar_prov.php");
mysqli_close($con);
?>