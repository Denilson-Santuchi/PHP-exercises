<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler implements ICommand
{
    public function __construct(/* repository, mail service ... */)
    {
        # code...
    }

    public function execute(GerarPedidoCommand $gerarPedido): void
    {
        $orcamento = new Orcamento();
        $orcamento->quantidade = $gerarPedido->recuperaQuantidade();
        $orcamento->valor = $gerarPedido->recuperaValor();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->recuperaNome();
        $pedido->orcamento = $orcamento;

        echo 'criou' . PHP_EOL;
    }
}
