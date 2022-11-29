<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<br>
<br>
<?php
		$con = mysqli_connect("localhost","root","","tienda_deportes");
		$resultado = mysqli_query($con, "select * from articulos");
		if ($resultado === FALSE) {
			echo "fallo";
			die(mysqli_error());
		}
		echo "<center>";
		echo "<h1>Consulta de la tabla Articulos</h1>";
		echo "<table border='3'>
			<tr>
			<th>Clave</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Observacion</th>
			</tr>";
		while ($row=mysqli_fetch_array($resultado))
		{
			echo "<tr>";
			echo "<td align=center>" .$row['clave_art']."</td>";
			echo "<td align=center>" .$row['desc_art']."</td>";
			echo "<td align=center>" .$row['precio_art']."</td>";
			echo "<td align=center>".$row['obs_art']."</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<br>";
		echo "<a href='consulta_articulos.php'>Actualizar tabla</a>";
		echo "<br>";
		$registros=mysqli_num_rows($resultado);
		echo "<br>Registros: ".$registros;
		mysqli_close($con);
	?>
</body>
</html>