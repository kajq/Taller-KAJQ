<?php
//se almacena en el sessión la conexión de base datos para ser utilizada
$_SESSION['connect']= new MySQLi("localhost", "root","", "tallerdb");
if ($_SESSION['connect'] -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" . $_SESSION['connect'] -> mysqli_connect_errno() 
		. ") " . $_SESSION['connect'] -> mysqli_connect_error());
}
?>