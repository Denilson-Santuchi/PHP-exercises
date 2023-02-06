<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximo;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximo = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}
