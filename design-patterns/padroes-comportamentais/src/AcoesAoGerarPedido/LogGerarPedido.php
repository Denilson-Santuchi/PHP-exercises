<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido implements IAcaoAoGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo 'Gerando log de criação de pedido';
    }
}
