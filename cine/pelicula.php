<?php
    include_once ("variables.php");
    $id = $_GET['id'];
    $pelicula = mysql_query("SELECT * FROM peliculas WHERE id=$id"); 
    while($fila = mysql_fetch_array($pelicula)){
        $titulo= $fila['titulo'];
        $sinopsis = $fila['sinopsis'];
        $fecha = $fila['fecha_estreno'];
        $duracion = $fila['duracion'];
        $poster = $fila['poster'];
    } 
	$titulo_pagina = $titulo;
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php include_once ("head.php"); ?>
</head>
<body> 
	<header>
		<h1><?php echo $titulo_sitio; ?></h1>
		<?php include_once ("menu.php"); ?>  
	</header>
    <h1><?php echo $titulo;?></h1>
    <p><?php echo $sinopsis;?></p>
    <img src="img/peliculas/posters/<?php echo $poster;?>" />
</body>
</html>