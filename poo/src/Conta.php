<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->saldo = 0;
        $this->titular = $titular;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
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

    public static function recuperaNumeroDeContas(): int
    {
        return Conta::$numeroDeContas;
    }

    public function recuperaNome(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpf(): string
    {
        return $this->titular->recuperaCpf();
    }
}
