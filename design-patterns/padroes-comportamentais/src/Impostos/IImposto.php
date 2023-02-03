<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

interface IImposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
