<?php

class Conta
{
    public string $cpfDoTitular;
    public string $nomeDoTitular;
    public float $saldo;

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
}
