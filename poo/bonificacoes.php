<?php

require_once 'src/Helpers/autoLoad.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Funcionario\{Desenvolvedor, Gerente, Diretor};

$funcionario1 = new Desenvolvedor(
    new Cpf('123.456.789-10'),
    'Fulano',
    'Desenvolvedor',
    1000
);

$funcionario2 = new Gerente(
    new Cpf('987.654.321-10'),
    'Fulano jr',
    'Gerente',
    3000
);

$funcionario3 = new Diretor(
    new Cpf('987.999.111-10'),
    'Fulano jr filho',
    'Diretor',
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacoesDe($funcionario1);
$controlador->adicionaBonificacoesDe($funcionario2);
$controlador->adicionaBonificacoesDe($funcionario3);

echo $controlador->recuperaBonificacoes() . PHP_EOL;
