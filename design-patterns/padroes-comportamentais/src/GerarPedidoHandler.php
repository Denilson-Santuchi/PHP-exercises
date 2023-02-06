<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\{CriarPedidoNoBanco, EnviarPedidoPorEmail, IAcaoAoGerarPedido, LogGerarPedido};

class GerarPedidoHandler implements ICommand
{
    /** @var IAcaoAoGerarPedido[] */
    private array $acoesAposGerarPedido = [];
    public function __construct(/* repository, mail service ... */)
    {
        # code...
    }

    public function adicionarAcaoAoGerarPedido(IAcaoAoGerarPedido $acao): void
    {
        $this->acoesAposGerarPedido[] = $acao;
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

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
