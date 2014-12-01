<?php
    include_once ("variables.php");
	$titulo_pagina = "Países";
	$paises = mysql_query("SELECT * FROM paises"); 
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
	<?php while($fila = mysql_fetch_array($paises)){
		echo $fila['id']. " - ";
		echo $fila['nombre'];
		echo "<br />";
	    
	} ?> 
</body>
</html>