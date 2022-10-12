<?php

function depositar(array $conta, float $valorADepositar): array {

    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem('O valor a ser depositado precisa ser positivo');
    }
    
    return $conta;

}

function sacar(array $conta, float $valorASacar): array {

    if ($valorASacar > $conta['saldo']){
        exibeMensagem('Você não pode sacar');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;

}

function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
};

function titularComLetrasMaiusculas (array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}