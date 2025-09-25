<?php
echo "Variables definidas en este script:<br>";
// $$ =2;
$💩 = 3;
$function = 4;
$___estado_ = 5;
// $23alumno = 6;
$alumno23 = 7;
// $?php = 8;
// $php? = 9;
$PinGüinO = 10;
// $.nombre = 11;
// $nombre. = 12;
// $nom.bre = 13;
// $p-h = 14;

print_r(get_defined_vars());
echo"<br>";
$a = 2;
if(true){
	$a = 5;
	$b = 'Hola';
}
echo $a, $b;

for($i=0; $i<3; $i++){
    $a = 'Adiós';
}

echo $a, $b;


function saludo(){
	global $a;        
	return "Hola " . $a;
}

$a = 'Javier';

function contar(){
	static $num = 0;
	$num++;
	echo '<p>', $num,'</p>';
}

contar(); //imprime 1
contar(); //imprime 2
contar(); //imprime 3

echo"<br>";
echo"<br>";

$a = 'Javier Mancera';
echo "<p>$a</p>";  //Javier Mancera
echo '<p>$a</p>';  //$a
