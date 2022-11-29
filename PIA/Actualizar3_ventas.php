<?php
$con = mysqli_connect("localhost","root","","tienda_deportes");
if (!$con) 
	{
		echo "fallo";
		die(mysqli_error());
	}
	$CLAVE=$_POST['clave'];
	$CANTIDAD=$_POST['cantidad'];
	$PRECIO=$_POST['precio'];
	$FECHA=$_POST['fecha'];
	$NUMEROVTA=$_POST['numerovta'];

mysqli_query($con, "UPDATE ventas
	SET clave_vta='$CLAVE', cantidad_vta='$CANTIDAD', precio_vta='$PRECIO', numeroventa_vta='$NUMEROVTA'
	WHERE clave_vta='$CLAVE'");

header("Location:actualizar_ventas.php");
mysqli_close($con);
?>