<!DOCTYPE html>
<html>
<head>
	<title>Actualización de Datos</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<body>

<ul>
  <li><a href="PIA.html">INICIO</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">INVENTARIO</a>
    <div class="dropdown-content">
      <a href="consulta_articulos.php">Articulos</a>
      <a href="consulta_proveedores.php">Proveedores</a>
      <a href="consulta_ventas.php">Ventas</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">INGRESAR REGISTROS</a>
    <div class="dropdown-content">
      <a href="insertar_articulos.html">Articulos</a>
      <a href="insertar_proveedores.html">Proveedores</a>
      <a href="insertar_ventas.html">Ventas</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">BORRAR REGISTROS</a>
    <div class="dropdown-content">
      <a href="">Articulos</a>
      <a href="">Proveedores</a>
      <a href="">Ventas</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ACTUALIZAR REGISTROS</a>
    <div class="dropdown-content">
      <a href="actualizar_articulos.php">Articulos</a>
      <a href="">Proveedores</a>
      <a href="actualizar_ventas.php">Ventas</a>
    </div>
  </li>
</ul>

	<?php
		$con = mysqli_connect("localhost","root","","tienda_deportes");
		$CLAVE = $_POST['id'];
		$resultado = mysqli_query($con, "select * from ventas where clave_vta = $CLAVE");
		if ($resultado === FALSE) 
		{
			echo "fallo";
			die(mysqli_error());
		}
		echo "<center>";
		echo "<form action=Actualizar3_ventas.php method=POST>";
		echo "<h1>Editar Datos</h1>";
		echo "<table border='1'>";
		while ($row=mysqli_fetch_array($resultado)) 
		{
			echo "<tr>";
			echo "<td>Clave:</td>"; echo "<td><input type='text' name='clave' value=".$row['clave_vta']."></td></tr>";
			echo "<tr>";
			echo "<td>Cantidad:</td>"; echo "<td><input type='text' name='cantidad' value=".$row['cantidad_vta']."></td></tr>";
			echo "<tr>";
			echo "<td>Precio:</td>"; echo "<td><input type='text' name='precio' value=".$row['precio_vta']."></td></tr>";
			echo "<tr>";
			echo "<td>NumeroVenta:</td>"; echo "<td><input type='text' name='numerovta' value=".$row['numeroventa_vta']."></td></tr>";
		}
		echo "</table>";
		mysqli_close($con);
		echo "<br>";
		echo "<input type=submit value=Actualizar Datos/>";
		echo "</form>";
	?>
</body>
<footer>
  <p><div align="center" id="copyright">Copyright&copy; 2022. Pagina creada por Angel Reyna - Todos los derechos reservados</div></p>
</footer>
</html>