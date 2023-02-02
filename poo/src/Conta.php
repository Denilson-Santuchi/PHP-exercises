<?php

class Conta
{
    private string $cpfDoTitular;
    private string $nomeDoTitular;
    private float $saldo = 0;

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo 'saldo indisponivel';
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar <= 0) {
            echo 'operação inválida!';
            return;
        }

        $this->saldo += $valorADepositar;
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

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaCpfDoTitular(): string
    {
        return $this->cpfDoTitular;
    }

    public function recuperaNomeDoTitular(): string
    {
        return $this->nomeDoTitular;
    }

    public function defineCpfDoTitular(string $cpf): void
    {
        $this->cpfDoTitular = $cpf;
    }

    public function defineNomeDoTitular(string $nome): void
    {
        $this->nomeDoTitular = $nome;
    }
}
