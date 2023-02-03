<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Iss implements IImposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
