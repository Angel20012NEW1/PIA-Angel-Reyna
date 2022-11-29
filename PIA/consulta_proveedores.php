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
		$resultado2 = mysqli_query($con, "select * from proveedores");
		if ($resultado2 === FALSE) {
			echo "fallo";
			die(mysqli_error());
		}
		echo "<center>";
		echo "<h1>Consulta de la tabla Proveedores</h1>";
		echo "<table border='3'>
			<tr>
			<th>Clave</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Email</th>
			</tr>";
		while ($row=mysqli_fetch_array($resultado2))
		{
			echo "<tr>";
			echo "<td align=center>" .$row['clave_prov']."</td>";
			echo "<td align=center>".$row['nombre_prov']."</td>";
			echo "<td align=center>" .$row['direccion_prov']."</td>";
			echo "<td align=center>" .$row['telefono_prov']."</td>";
			echo "<td align=center>" .$row['email_prov']."</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<br>";
		echo "<a href='consulta_proveedores.php'>Actualizar tabla</a>";
		$registros=mysqli_num_rows($resultado2);
		echo "<br>";
		echo "<br>Registros: ".$registros;
		mysqli_close($con);
	?>
</body>
</html>