<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Denilson Santuchi');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfDoTitular() . PHP_EOL;

$segundaConta = new Conta('987.654.321-00', 'Test');
$segundaConta->deposita(500);

$primeiraConta->transfere(100, $segundaConta);
echo var_dump($primeiraConta);
echo var_dump($segundaConta);
