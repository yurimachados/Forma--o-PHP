<?php

namespace Alura\Banco\Modelo;

use AcessoPropriedades;

final class Endereco
{

    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua} Nº - {$this->numero}, {$this->bairro} - {$this->cidade}";
    }

    public function alteraCidade($novaCidade): void
    {
        $this->cidade = $novaCidade;
    }

    public function alteraNumero($novoNumero): void
    {
        $this->numero = $novoNumero;
    }

    public function alteraBairro($novoBairro): void
    {
        $this->bairro = $novoBairro;
    }

    public function alteraRua($novaRua): void
    {
        $this->rua = $novaRua;
    }

    public function __set(string $nomeAtributo, string $value): void
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($value);
    }
}
