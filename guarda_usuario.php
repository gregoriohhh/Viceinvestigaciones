<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$titulo=$_POST['titulo'];
	$investigador=$_POST['investigador'];
	$fecha=str_replace('/', '-', $_POST['fecha']);
	$duracion=$_POST['duracion'];


	
	
	$query="INSERT INTO proyectos (id, titulo, investigador, fecha, duracion) VALUES ('$id','$titulo','$investigador','$fecha','$duracion')";
	
	$resultado=$mysqli->query($query);
	
	?>
<html>
	<head>
		<title>Guardar usuario</title>	
		<link rel="stylesheet"  href="css/normalize.css">
		<link rel="stylesheet"  href="css/estilos.css" >
		1
	
<META HTTP-EQUIV="Refresh" CONTENT="1; URL=index.html">
	</head>
	<body>
		<center>	
			

			<?php if($resultado>0){ ?>
				<h1>Usuario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
		</center>
	</body>
	</html>	

