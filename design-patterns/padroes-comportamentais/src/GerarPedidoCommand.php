<?php

namespace Alura\DesignPattern;

class GerarPedidoCommand
{
    public float $valor;
    public int $quantidade;
    public string $nome;

    public function __construct(float $valor, int $quantidade, string $nome)
    {
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaQuantidade(): int
    {
        return $this->quantidade;
    }

    public function recuperaValor(): float
    {
        return $this->valor;
    }
}
