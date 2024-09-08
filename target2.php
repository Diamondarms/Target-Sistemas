<?php

$entrada = 610;

$y = 1;
$x = 0;
$aux = 0;

while ($x < $entrada) { 
    
    $aux = $x + $y;
    $x = $y;
    $y = $aux;

    if($x == $entrada){
        echo "o número $entrada faz parte da sequência de fibonacci";
    }
}

echo "o número $entrada NÃO faz parte da sequência de fibonacci";;

?>
