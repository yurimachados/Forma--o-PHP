<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;    
    try {
        funcao2();
        // Multi catch, é quando dentro do () são inseridos multiplos tipos de erro
        // separados por um '|'.
    } catch (Throwable $problema) {
        
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    // Excessão lançada (essa é uma classe);
    throw new RuntimeException('Essa é uma mensagem de exceção'); 

    // Erro de divisão.
    // $divisao = intdiv(5,0);
    // Erro ao inserir "Value" no index 2 em um array com tamanho fixado em 2
    // $arrayFixo = new SplFixedArray(2);
    // $arrayFixo[2] = 'Value';

    

    // Array com dois itens (debug_backtrace)
    // 1 - Informação do arquivo onde o dado foi executado
    // 2 - Nome da função que foi executada e linha em que foi chamada
    // var_dump(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
