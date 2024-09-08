<?php

$regions = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53
];

$soma = 0;

foreach ($regions as $value) {
    $soma += $value;
}

foreach ($regions as $r => $value) {
    $porcentagem = $value / $soma;
    echo $r . " representa " . number_format($porcentagem, 2) . "%<br>";
}

?>