<?php
require_once('config.php');
$conexion = obtenerConexion();

// Datos de entrada
$precioMin = $_GET['precioMin'];
$precioMax = $_GET['precioMax'];

// SQL
$sql = "SELECT * FROM `componente` 
WHERE precio BETWEEN $precioMin AND $precioMax;";

$resultado = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila; // Insertar la fila en el array
}

responder($datos, true, "Datos recuperados", $conexion);