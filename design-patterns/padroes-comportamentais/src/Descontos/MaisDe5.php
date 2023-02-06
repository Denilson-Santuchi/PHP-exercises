<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class MaisDe5 extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidade > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximo->calculaDesconto($orcamento);
    }
}
