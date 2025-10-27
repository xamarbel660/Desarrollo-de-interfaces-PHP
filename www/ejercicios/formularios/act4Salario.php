<?php
$horas = $_GET['horas'];
$pago = $_GET['sueldo'];


$salario_semanal = $horas * $pago;
$salario_mensual = $salario_semanal * 4;
$irpf = $salario_mensual * 0.15;
$salario_neto = $salario_mensual - $irpf;

echo "Salario bruto mensual: " . $salario_mensual . " euros<br>";
echo "Salario neto mensual: " . $salario_neto . " euros<br>";
?>