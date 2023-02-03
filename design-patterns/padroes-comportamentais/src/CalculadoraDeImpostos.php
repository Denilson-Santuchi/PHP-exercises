<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\IImposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, IImposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}
