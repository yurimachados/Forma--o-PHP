<?php

namespace Alura\Banco\Modelo\Conta;

use Throwable;

class NomeInvalidoException extends \DomainException
{
    public function __construct()
    {
        $mensagem = "O nome precisa ter pelo menos 5 caracteres";
        parent::__construct($mensagem);
    }
}