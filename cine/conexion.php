<?php

$conexion = mysql_connect('localhost','root','root');

if (!$conexion){
	die('No se pudo conectar:' . mysql_error());
}	

$bd = mysql_select_db('cine',$conexion);
mysql_set_charset('utf-8', $conexion);
mysql_query("SET NAMES 'utf8'");

// ! distinto de / si no se da
// die Mata la conexión
// Conexión a la base de datos licenciaturas 
// mysql_connect, mysql_select_db, mysql_set_charset son instrucciones de PHP

?>