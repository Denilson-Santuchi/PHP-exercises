<?php

namespace Alura\Banco\Model\Conta;

class ContaPoupanca extends Conta
{
    protected function percentalDaTarifa(): float
    {
        return 0.03;
    }
}
