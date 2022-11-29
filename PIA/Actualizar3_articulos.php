<?php
$con = mysqli_connect("localhost","root","","tienda_deportes");
if (!$con) 
	{
		echo "fallo";
		die(mysqli_error());
	}
	$CLAVE=$_POST['clave'];
	$DESCRIPCION=$_POST['desc'];
	$PRECIO=$_POST['precio'];
	$OBSERVACION=$_POST['obs'];

mysqli_query($con, "UPDATE articulos
	SET clave_art='$CLAVE', desc_art='$DESCRIPCION', precio_art='$PRECIO', obs_art='$OBSERVACION'
	WHERE clave_art='$CLAVE'");

header("Location:actualizar_articulos.php");
mysqli_close($con);
?>