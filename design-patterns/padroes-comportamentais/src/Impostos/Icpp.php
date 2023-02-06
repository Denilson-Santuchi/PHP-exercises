<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icpp extends ImpostoDuasAliquotas implements IImposto
{
    public function condicional(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    public function aliquotaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function aliquotaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}
