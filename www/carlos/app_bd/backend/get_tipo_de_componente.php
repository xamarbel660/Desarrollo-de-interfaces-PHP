<?php
require_once('config.php');
$conexion = obtenerConexion();

// Datos de entrada
$nombreTipo = $_GET['nombreTipo'];

// SQL
$sql = "SELECT * FROM `tipo` WHERE `tipo` LIKE '%$nombreTipo%';";

$resultado = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila; // Insertar la fila en el array
}

responder($datos, true, "Datos recuperados", $conexion);