<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.456-20'),
        'Yuri Machado',
        new Endereco('Cidade', "Bairro", "rua",'215')
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exeption) {
    echo "Valor a depositar precisa ser positivo";
}
