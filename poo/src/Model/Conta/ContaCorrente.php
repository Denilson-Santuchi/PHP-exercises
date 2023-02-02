<?php

namespace Alura\Banco\Model\Conta;

class ContaCorrente extends Conta
{
    protected function percentalDaTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo 'saldo indisponivel';
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
}
