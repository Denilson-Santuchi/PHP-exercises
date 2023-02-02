<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$denilson = new Titular(new Cpf('123.456.789-10'), 'Denilson');

$primeiraConta = new Conta($denilson);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo var_dump($primeiraConta->recuperaNome());
echo var_dump($primeiraConta->recuperaCpf());

$test1 = new Titular(new Cpf('987.654.321-00'), 'Test Test');

$segundaConta = new Conta($test1);
$segundaConta->deposita(500);

$primeiraConta->transfere(100, $segundaConta);
echo var_dump($primeiraConta);
echo var_dump($segundaConta);

new Conta(new Titular(new Cpf('135.158.961-18'), 'test test'));

echo Conta::recuperaNumeroDeContas() . PHP_EOL;
