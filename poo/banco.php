<?php

require_once 'src/Helpers/autoLoad.php';

use Alura\Banco\Model\Conta\{Titular, Conta};
use Alura\Banco\Model\{Endereco, Cpf};

$endereço1 = new Endereco('test', 'test', 'test', 'test');
$denilson = new Titular(new Cpf('123.456.789-10'), 'Denilson', $endereço1);

$primeiraConta = new Conta($denilson);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo var_dump($primeiraConta->recuperaNome());
echo var_dump($primeiraConta->recuperaCpf());

$test1 = new Titular(new Cpf('987.654.321-00'), 'Test Test', $endereço1);

$segundaConta = new Conta($test1);
$segundaConta->deposita(500);

$primeiraConta->transfere(100, $segundaConta);
echo var_dump($primeiraConta);
echo var_dump($segundaConta);

$outro = new Titular(new Cpf('135.158.961-18'), 'test test', $endereço1);
new Conta($outro);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;
