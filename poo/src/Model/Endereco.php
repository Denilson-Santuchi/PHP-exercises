<?php

namespace Alura\Banco\Model;

class Endereco
{
    private string $rua;
    private string $numero;
    private string $bairro;
    private string $cidade;

    public function __construct(string $rua, string $numero, string $bairro, string $cidade)
    {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }
}
