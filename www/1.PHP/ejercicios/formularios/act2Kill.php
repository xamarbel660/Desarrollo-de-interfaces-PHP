<?php
$n =$_GET['num'];
$conver =2.352;


if ($n>=1 and $n<=100) {
    echo $n/$conver;
}else {
    echo "El numero no esta entre 1 y 100";
}

?>