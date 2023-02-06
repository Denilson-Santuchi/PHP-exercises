<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{GerarPedidoCommand, GerarPedidoHandler};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedidoCommand = new GerarPedidoCommand($valorOrcamento, $numeroDeItens, $nomeCliente);
$geraPedidoHandler = new GerarPedidoHandler();
$geraPedidoHandler->execute($geraPedidoCommand);
