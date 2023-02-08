<?php

namespace Alura\Arquitetura\Gameficacao\Dominio\Selo;

use Alura\Arquitetura\Academico\Dominio\Aluno\Cpf;

interface RepositorioDeSelo
{
    public function adiciona(Selo $selo): void;
    public function selosDeAlunoComCpf(Cpf $cpf);
}
