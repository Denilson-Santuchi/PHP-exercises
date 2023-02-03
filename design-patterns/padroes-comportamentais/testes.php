<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\{Icms, Iss};
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculaImpostos = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;
$orcamento->quantidade = 5;

$calculaDesconto = new CalculadoraDeDescontos;
echo $calculaDesconto->calcula($orcamento);

echo $calculaImpostos->calcula($orcamento, new Icms());
