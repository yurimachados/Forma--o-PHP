<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Yuri Machado', 
    new CPF ('123.465.848-80'),
    1000);

$umFuncionario2 = new Gerente(
    'Hiago Sirtuli', 
    new CPF ('987.654.451-85'),
    3000);

$umFuncionario3 = new Diretor(
    'Cupinxa', 
    new CPF ('987.654.451-85'), 
    5000);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF ('957.654.451-85'),
    3500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umFuncionario2);
$controlador->adicionaBonificacaoDe($umFuncionario3);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();

?>