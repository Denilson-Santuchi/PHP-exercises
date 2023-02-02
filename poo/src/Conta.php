<?php

class Conta
{
    private string $cpfDoTitular;
    private string $nomeDoTitular;
    private float $saldo;

    public function __construct(string $cpf, string $nome)
    {
        $this->validaNome($nome);

        $this->cpfDoTitular = $cpf;
        $this->nomeDoTitular = $nome;
        $this->saldo = 0;
    }

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

    private function validaNome(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo 'nome precisa de ter 5 caracters no mínimo.' . PHP_EOL;
            exit();
        }
    }
}
