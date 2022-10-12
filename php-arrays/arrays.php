<?php

$array = [
    'Um',
    'Dois',
    'Três'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em portugês é: $nomeNumero" . PHP_EOL;
    $contador++;
}

echo "Total: " . count($array) . PHP_EOL;

var_dump(array_is_list($array));
