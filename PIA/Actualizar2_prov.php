<!DOCTYPE html>
<html>
<head>
	<title>Actualización de Datos</title>
	<link rel="stylesheet" type="text/css" href="css.css">
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
      <a href="actualizar_prov.php">Proveedores</a>
      <a href="actualizar_ventas.php">Ventas</a>
    </div>
  </li>
</ul>

	<?php
		$con = mysqli_connect("localhost","root","","tienda_deportes");
		$CLAVE = $_POST['id'];
		$resultado = mysqli_query($con, "select * from proveedores where clave_prov = $CLAVE");
		if ($resultado === FALSE) 
		{
			echo "fallo";
			die(mysqli_error());
		}
		echo "<center>";
		echo "<form action=Actualizar3_prov.php method=POST>";
		echo "<h1>Editar Datos</h1>";
		echo "<table border='1'>";
		while ($row=mysqli_fetch_array($resultado)) 
		{
			echo "<tr>";
			echo "<td>Clave:</td>"; echo "<td><input type='text' name='clave' value=".$row['clave_prov']."></td></tr>";
			echo "<tr>";
			echo "<td>Nombre:</td>"; echo "<td><input type='text' name='nombre' value=".$row['nombre_prov']."></td></tr>";
			echo "<tr>";
			echo "<td>Direccion:</td>"; echo "<td><input type='text' name='direccion' value=".$row['direccion_prov']."></td></tr>";
			echo "<tr>";
			echo "<td>Telefono:</td>"; echo "<td><input type='text' name='telefono' value=".$row['telefono_prov']."></td></tr>";
			echo "<tr>";
			echo "<td>Email:</td>"; echo "<td><input type='text' name='email' value=".$row['email_prov']."></td></tr>";
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