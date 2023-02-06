<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\{MaisDe5, MaisDe500, SemDesconto};

class CalculadoraDeDescontos
{
    public function calcula(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new MaisDe5(
            new MaisDe500(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
