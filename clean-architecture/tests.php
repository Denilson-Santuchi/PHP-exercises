<?php

require 'vendor/autoload.php';

use Alura\Arquitetura\FabricaAluno;

$fabrica = new FabricaAluno();

$fabrica->comCpfEmailENome(
    '132.602.226-18',
    'Denilson Santuchi',
    'denilson.costa@braip.com'
)->adionaTelefone('33', '99971-1551')->aluno();

var_dump($fabrica);
