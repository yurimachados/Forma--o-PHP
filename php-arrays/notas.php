<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => null
];

krsort($notas);
var_dump($notas);

if (is_array($notas)){
    echo "Sim, é um array";
}

var_dump(array_is_list($notas));

echo 'Ana fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula

echo 'Quem tirou 10? ' . PHP_EOL;
var_dump(array_search(10, $notas));