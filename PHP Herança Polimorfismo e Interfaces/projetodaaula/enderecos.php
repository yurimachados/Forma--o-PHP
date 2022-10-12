<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('Petropolis', 'bairro qualquer', 'Minha rua', '54');
$outroEndereco = new Endereco('Gravataí', 'Cohab A', 'Florianópolis', '196');

$umEndereco->rua = 'Teste HAHAHA';
$outroEndereco->numero = 'teste hehehehe';

echo $umEndereco . PHP_EOL;
echo $outroEndereco;