<?php
$nombre = $_GET['nombre'];

if (isset($_GET['hombre'])) {
    echo "Bienvenido " . $nombre;
} else if (isset($_GET['mujer'])) {
    echo "Bienvenida " . $nombre;
} else {
    echo "Bienvenide " . $nombre;
}
?>