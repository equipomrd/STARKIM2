<?php // no deben usar ROOT en produccion
$conexion = new mysqli("localhost", "root", "", "STARKIM");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>