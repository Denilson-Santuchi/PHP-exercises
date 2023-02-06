<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculaImpostos = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidade = 6;

echo $calculaImpostos->calcula($orcamento, new Iss(new Icms()));

/* $calculaDesconto = new CalculadoraDeDescontos;
echo $calculaDesconto->calcula($orcamento);

$calculaImpostos = new CalculadoraDeImpostos;
echo $calculaImpostos->calcula($orcamento, new Ikcv); */
