<?php

require 'vendor/autoload.php';

use Alura\Arquitetura\Aluno\Aluno;

$aluno = Aluno::comCpfNomeEEmail(
    '132.602.226-18',
    'Denilson Santuchi',
    'denilson.costa@braip.com'
)->adicionarTelefone('33', '99971-1551');

var_dump($aluno);
