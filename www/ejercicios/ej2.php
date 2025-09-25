<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <!-- Ejercicio 2: Crea un conversor de euros a dólares. La cantidad de euros a convertir debe estar almacenada en una variable y la tasa de cambio entre las monedas en una constante. -->
    <?php
        $euros = 100;
        define("TASA_CAMBIO", 1.18);

        $dolares = $euros * TASA_CAMBIO;
        echo "<p>{$euros} euros son {$dolares} dólares.</p>";
    ?>
</body>
</html>