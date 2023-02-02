<?php

require_once 'src/Helpers/autoLoad.php';

use Alura\Banco\Model\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Model\{Cpf, Endereco};

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Denilson',
        new Endereco('test', 'test', 'test', 'test')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo var_dump($conta);
