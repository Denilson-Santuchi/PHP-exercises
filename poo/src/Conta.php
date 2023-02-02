<?php

class Conta
{
    private string $cpfDoTitular;
    private string $nomeDoTitular;
    private float $saldo = 0;

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo 'saldo indisponivel';
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar <= 0) {
            echo 'operação inválida!';
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo 'saldo indisponivel';
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    
}
