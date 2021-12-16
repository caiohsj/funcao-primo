<?php

function primo(int $inicial, int $final): array
{
    $primos = [];
    for ($i = $inicial+1; $i < $final; $i++) {
        $divisores = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $divisores++;
            }
        }
        if ($divisores == 2) {
            $primos[] = $i;
        }
    }
    return $primos;
}
$primos = primo(10, 29);
$mensagem = 'Encontrados '. count($primos) .' números primos, são eles: ';
$numerosPrimos = '';
foreach($primos as $key => $primo) {
    $numerosPrimos .= $primo;
    if ($key < count($primos) - 1) {
        $numerosPrimos .= ', ';
    }
}
echo $mensagem . $numerosPrimos;