<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class ImpostoDuasAliquotas
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($this->condicional($orcamento)) {
            return $this->aliquotaMaxima($orcamento);
        }

        return $this->aliquotaMinima($orcamento);
    }

    abstract public function condicional(Orcamento $orcamento): bool;

    abstract public function aliquotaMaxima(Orcamento $orcamento): float;

    abstract public function aliquotaMinima(Orcamento $orcamento): float;
}
