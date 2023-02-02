<?php

namespace Alura\Banco\Model\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
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
        $tarifaDoSaque = $valorASacar * $this->percentalDaTarifa();
        $valorDoSaque = $tarifaDoSaque + $valorASacar;
        if ($valorDoSaque > $this->saldo) {
            echo 'saldo indisponivel';
            return;
        }

        $this->saldo -= $valorDoSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar <= 0) {
            echo 'operação inválida!';
            return;
        }

        $this->saldo += $valorADepositar;
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

    abstract protected function percentalDaTarifa(): float;
}
