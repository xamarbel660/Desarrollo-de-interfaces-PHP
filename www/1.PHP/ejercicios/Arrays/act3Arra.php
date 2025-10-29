<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$arra = [];

for ($i = 0; $i <= 100; $i++) {
    $arra[]=rand(0,20);
}

foreach ($arra as $valor) { 
    echo "<span>".$valor.",</span>";
}
echo"<br>";
foreach ($arra as $valor) { 
        if ($valor==$num1) {
        echo "<span style='color:red'>".$num2.",</span>";
    }else{
        echo "<span>".$valor.",</span>";
    }
}



?>

<!-- Ejercicio 3: Escribe un programa que reciba dos valores numéricos y genere
100 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios.
El programa a continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.
Nota: para generar un número aleatorio entre 0 y 4 se puede usar rand(0,4) -->