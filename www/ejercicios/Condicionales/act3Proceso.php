<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>

<body>
    <?php
    $hora = $_GET['hora'];
    $minutos = $_GET['minutos'];
    $momentoDelDia = "";
    $horaTexto = "";
    $minutosTexto = "";

    if ($hora >= 6 && $hora <= 12) {
        $momentoDelDia = "de la mañana";
    } else if ($hora >= 13 && $hora <= 20) {
        $momentoDelDia = "de la tarde";
    } else {
        $momentoDelDia = "de la noche";
    }

    switch ($minutos) {
        case 0:
            $minutosTexto = "en punto";
            break;
        case 15:
            $minutosTexto = "y cuarto";
            break;
        case 30:
            $minutosTexto = "y media";
            break;
        case 45:
            $minutosTexto = "menos cuarto";
            $hora = $hora-1;
            break;
    }

    switch ($hora) {
        case 1:
        case 13:
            $horaTexto = "la una";
            break;
        case 2:
        case 14:
            $horaTexto = "las dos";
            break;
        case 3:
        case 15:
            $horaTexto = "las tres";
            break;
        case 4:
        case 16:
            $horaTexto = "las cuatro";
            break;
        case 5:
        case 17:
            $horaTexto = "las cinco";
            break;
        case 6:
        case 18:
            $horaTexto = "las seis";
            break;
        case 7:
        case 19:
            $horaTexto = "las siete";
            break;
        case 8:
        case 20:
            $horaTexto = "las ocho";
            break;
        case 9:
        case 21:
            $horaTexto = "las nueve";
            break;
        case 10:
        case 22:
            $horaTexto = "las diez";
            break;
        case 11:
        case 23:
            $horaTexto = "las once";
            break;
        case 0:
        case 12:
            $horaTexto = "las doce";
            break;
    }
    echo "La cita se ha elegido a $horaTexto $minutosTexto $momentoDelDia.";
    ?>
    <a href="act3.html">Otra cita</a>
</body>

</html>