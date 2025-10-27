<?php

$arra = [];
for ($i = 1; $i <= 12; $i++) {
    array_push($arra, $_POST['n' . $i]);
}

$mes = 1;
foreach ($arra as $num) {
    $gra = "";
    for ($j = 0; $j < $num; $j++) {
        $gra .= "*";
    }
    echo "Mes " . $mes . ": " . $gra . "<br>";
    $mes=($mes+ 1);
}
