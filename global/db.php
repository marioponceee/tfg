<?php
//DB Config:.
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "neflis_tfg";
// Crear conexion

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
	die("Connection Error!");
}
?>