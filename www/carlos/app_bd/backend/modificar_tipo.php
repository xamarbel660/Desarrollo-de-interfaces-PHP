<?php
include_once("config.php");
$conexion = obtenerConexion();

// Recoger datos
$tipo = json_decode($_POST['tipo']);

$sql = "UPDATE tipo
SET tipo = '" . $tipo->tipo . "', 
descripcion = '" .  $tipo->descripcion . "' 
WHERE idtipo = $tipo->idtipo ";

mysqli_query($conexion, $sql);

if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);

    responder(null, true, "Se ha producido un error número $numerror que corresponde a: $descrerror <br>", $conexion);

} else {
    // Prototipo responder($datos,$error,$mensaje,$conexion)
    responder(null, false, "Se ha modificado el componente", $conexion);
}
?>
