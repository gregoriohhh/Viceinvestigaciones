<?php
	require('conexion.php');
	
	$query="SELECT id,titulo,investigador,fecha,duracion FROM proyectos";
	$resultado=$mysqli->query($query);
	
	
?>
<!DOCTYPE=html>
<html lan="es">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>proyectos</title>
		<link rel="stylesheet"  href="css/normalize.css">
		<link rel="stylesheet"  href="css/estilos_proyectos.css" >
		<title>El primer script</title>
 		<script type="text/javascript">
 			alert("Se deben entregar informes parciales ");
		</script>
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
		<div class="CSSTableGenerator" l>
		<table overflow:scrol>
			<tr>
				<td><b>N°</b></td>
				<td colspan="2"><b>Título Proyecto</b></td>
				<td><b>Inv. Principal</b></td>
				<td><b>F. Inicio</b></td>
				<td><b>Duración</b></td>
			
			</tr>
				<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $row['id'];?>
						</td>
						<td colspan="2"><?php echo $row['titulo'];?>
						</td>
						<td><?php echo $row['investigador'];?>
						</td>
						<td><?php echo $row['fecha'];?>
						</td>
						<td><?php echo $row['duracion'];?>
						</td>		
					</tr>
				<?php } ?>
				</tbody>
			</table>	
			</div>
		</body>
	<footer>
		<strong><p>Powered by Gregorio Hernandez</p></strong>
		<strong><p>    Todos los derechos reservados © 2014</p></strong>
	</footer>
</html>
