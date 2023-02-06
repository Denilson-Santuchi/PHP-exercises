<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Ikcv extends ImpostoDuasAliquotas
{
    public function condicional(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidade > 3;
    }

    public function aliquotaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    public function aliquotaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}
