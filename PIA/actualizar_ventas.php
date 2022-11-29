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
      <a href="marco_borrar_articulos.php">Articulos</a>
      <a href="marco_borrar_proveedores.php">Proveedores</a>
      <a href="marco_borrar_ventas.php">Ventas</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ACTUALIZAR REGISTROS</a>
    <div class="dropdown-content">
      <a href="actualizar_articulos.php">Articulos</a>
      <a href="actualizar_prov.php">Proveedores</a>
      <a href="actualizar_ventas.php">Ventas</a>
    </div>
  </li>
</ul>

	<?php
		$con = mysqli_connect("localhost","root","","tienda_deportes");
		$resultado = mysqli_query($con, "select * from ventas");
		if ($resultado === FALSE) {
			echo "fallo";
			die(mysqli_error());
		}
		echo "<center>";
		echo "<h1>Actualizar datos de la tabla Ventas</h1>";
		echo "<table border='3'>
			<tr>
			<th>Clave</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>NumeroVenta</th>
			</tr>";
		while ($row=mysqli_fetch_array($resultado))
		{
			echo "<tr>";
			echo "<td align=center>" .$row['clave_vta']."</td>";
			echo "<td align=center>".$row['cantidad_vta']."</td>";
			echo "<td align=center>" .$row['precio_vta']."</td>";
			echo "<td align=center>" .$row['numeroventa_vta']."</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<br>";
		$registros=mysqli_num_rows($resultado);
		echo "<br>El número de registros son: ".$registros;
		mysqli_close($con);
?>
<h3>Escribe la CLAVE del Articulo a editar</h3>
<form action="Actualizar2_ventas.php" method="POST">
	Clave Venta: <input type="text" name="id">
	<br>
	<br>
	<input type="submit" value="Editar">
</form>
</body>
<footer>
  <p><div align="center" id="copyright">Copyright&copy; 2022. Pagina creada por Angel Reyna - Todos los derechos reservados</div></p>
</footer>
</html>