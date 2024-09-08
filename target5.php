<?php

$string = "sametsiS tegraT";
$reversed_string = "";

$string_split = str_split($string);
$strlen = count($string_split);

for ($i=0; $i < $strlen; $i++) { 
    $reversed_string .= $string_split[$strlen - $i - 1];
}

echo $reversed_string;

?>