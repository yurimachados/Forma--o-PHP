<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, Titular,ContaCorrente};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaCorrente(new Titular(
    new CPF('123.456.456-80'),
    'Fulano de tal',
    new Endereco('Gravataí','Bairro teste','Rua lá','95')
));

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperaSaldo();