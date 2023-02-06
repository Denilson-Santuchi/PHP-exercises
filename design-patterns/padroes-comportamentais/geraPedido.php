<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{GerarPedidoCommand, GerarPedidoHandler};
use Alura\DesignPattern\AcoesAoGerarPedido\{CriarPedidoNoBanco, EnviarPedidoPorEmail, LogGerarPedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedidoCommand = new GerarPedidoCommand($valorOrcamento, $numeroDeItens, $nomeCliente);
$geraPedidoHandler = new GerarPedidoHandler();
$geraPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$geraPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$geraPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
$geraPedidoHandler->execute($geraPedidoCommand);
