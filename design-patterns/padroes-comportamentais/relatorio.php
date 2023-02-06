<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Relatorio\{
    OrcamentoExportado,
    PedidoExportado,
    ArquivoXmlExportado,
    ArquivoZipExportado
};

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidade = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento');
$orcamentoExportadoZip = new ArquivoZipExportado('orcamento');

$pedido = new Pedido();
$pedido->dataFinalizacao = new DateTimeImmutable();
$pedido->nomeCliente = 'denilson santuchi';
$pedidoExportadoXml = new ArquivoXmlExportado('pedido');
$pedidoExportadoZip = new ArquivoZipExportado('pedido');

$pedidoExportado = new PedidoExportado($pedido);


echo $orcamentoExportadoXml->salvar($orcamentoExportado);
