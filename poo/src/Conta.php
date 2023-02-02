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
}
