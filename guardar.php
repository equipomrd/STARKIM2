<?php

include("conexion.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$sql = "INSERT INTO integrantes (nombres, apellidos)
        VALUES (?, ?)";

$stmt = $conexion->prepare($sql);

$stmt->bind_param("ss", $nombres, $apellidos);

if ($stmt->execute()) {
    echo "¡Registro agregado correctamente!";
} else {
    echo "Error al guardar los datos.";
}

$stmt->close();
$conexion->close();

?>
