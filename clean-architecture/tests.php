<?php

require 'vendor/autoload.php';

use Alura\Arquitetura\Aluno;

$aluno = new Aluno();
$aluno->adicionarTelefone('33', '99971-1551');
echo $aluno->telefones[0] . PHP_EOL;
