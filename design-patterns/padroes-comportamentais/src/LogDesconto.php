<?php

namespace Alura\DesignPattern;

class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        echo "salvando log de desconto: $descontoCalculado";
    }
}
