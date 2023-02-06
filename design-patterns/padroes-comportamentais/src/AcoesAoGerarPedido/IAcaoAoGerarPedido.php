<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

interface IAcaoAoGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}
