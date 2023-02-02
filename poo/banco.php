<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300);
$primeiraConta->defineCpfDoTitular('123.456.789-10');


echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfDoTitular() . PHP_EOL;

$segundaConta = new Conta();
