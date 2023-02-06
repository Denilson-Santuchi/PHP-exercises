<?php

use Alura\DesignPattern\Http\{CurlHttpAdapter, ReactPHPHttpAdapter};
use Alura\DesignPattern\{Orcamento, RegistroOrcamento};

require 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter);
$registroOrcamento->registrar(new Orcamento);
