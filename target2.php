<?php

$entrada = 611;


$y = 1;
$x = 0;
while ($x < $entrada) { 
    

    $x += $y;
    $y += $x;
    if($x == $entrada || $y == $entrada){
        echo "o número $entrada faz parte da sequência de fibonacci";
        return;
    }elseif($x > $entrada || $y > $entrada){
        echo "o número $entrada NÃO faz parte da sequência de fibonacci";;
        return;
    }
    
}

?>