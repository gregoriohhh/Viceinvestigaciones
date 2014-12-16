<?php
	require('conexion.php');
	
	$query="SELECT id FROM proyectos";
	
	$resultado=$mysqli->query($query);
	
?>
<!DOCTYPE=html>
<html lan="es">
	<head>
		<meta charset="utf-8" />
		<title>proyectos</title>
		<link rel="stylesheet"  href="css/normalize.css">
		<link rel="stylesheet"  href="css/estilos_proyectos.css" >
	</head>
	<body>
		<header>
			<figure>
				<img src="image/logo.png"></figure>
				<h1>Vicerrectoría de Investigaciones
					<br>
					Universidad del Quindío</h1>
		</header>
		<nav>
			<ul>
				<li><a href="index.html">Nuevo</a></li>
				<li><a href="
				#">Proyectos</a></li>
			</ul>
		</nav>


	<center><h1 >Proyectos</h1></center>	
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>N°</b></td>
					<td><b>Email</b></td>
					<td><b>N°</b></td>
					<td><b>Email</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						
						<tr>
							<td><?php echo $row['id'];?>
							</td>
							<td>
								<?php echo $row['email'];?>
							</td>
														</td>
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>	
			
	<footer>
		<strong><p>Powered by Gregorio Hernandez</p></strong>
		<strong><p>    Todos los derechos reservados © 2014</p></strong>
	</footer>
	</body>
</html>
