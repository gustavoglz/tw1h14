<?php
    include_once ("variables.php");
	$titulo_pagina = "Las mejores películas";
    $peliculas = mysql_query("SELECT * FROM peliculas");
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
    <?php while($fila = mysql_fetch_array($peliculas)){
        echo "<a href='pelicula.php?id=" .$fila['id']. "'>";
        echo "<div class='pelicula'>";
        if($fila['poster'] == ""){
            echo "<img src='img/peliculas/posters/null.gif' />";
        } else {
            echo "<img src='img/peliculas/posters/" . $fila['poster'] . "' />";
        };
		echo "<div class='datopelicula nombrepelicula'>" . $fila['titulo'] . "</div>";
        echo "<div class='datopelicula'>" . $fila['fecha_estreno'] . "</div>";
        echo "<div class='datopelicula'>" . $fila['duracion'] . " min </div>";
        echo "</div>";
        echo "</a>";
        
	} 
    ?>
</body>
</html>