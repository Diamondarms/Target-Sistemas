<?php

$json = file_get_contents('dados.json');

$dados = json_decode($json, true);

$dia_menor_rend = 1;
$dia_maior_rend = 1;
$menor_rend = $dados[0]['valor'];
$maior_rend = 0;
$dias = 0;
$soma = 0;

foreach($dados as $v) {
    $valor = $v['valor'];

    if ($valor != 0){
        $dias++;
        $soma += $valor;

        if($valor > $maior_rend){
            $maior_rend = $valor;
            $dia_maior_rend = $v['dia'];
        }else if($valor < $menor_rend){
            $menor_rend = $valor;
            $dia_menor_rend = $v['dia'];
        }
    }
}

$media = $soma / $dias;
$dias_acima_da_media = 0;

foreach($dados as $v) {
    $valor = $v['valor'];

    if ($valor > $media){
        $dias_acima_da_media++;
    }
}

echo $dia_menor_rend . "<br>";
echo $dia_maior_rend . "<br>";
echo $dias_acima_da_media . "<br>";

?>