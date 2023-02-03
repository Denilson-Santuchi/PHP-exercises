<?php

namespace Alura\DesignPattern;

class CalculadoraDeDescontos
{
    public function calcula(Orcamento $orcamento): float
    {
        if ($orcamento->quantidade > 5) {
            return $orcamento->valor * 0.1;
        }

        return 0;
    }
}
