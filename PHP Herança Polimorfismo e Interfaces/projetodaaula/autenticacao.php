<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Gerente;

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'João da silva',
    new CPF('789.798.789-80'),
    1000
);

$autenticador->tentaLogin($umDiretor,'4321');