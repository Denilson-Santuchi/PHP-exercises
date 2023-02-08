<?php

namespace Alura\Arquitetura\Gameficacao\Infra\Selo;

use Alura\Arquitetura\Academico\Dominio\Aluno\Cpf;
use Alura\Arquitetura\Gameficacao\Dominio\Selo\{RepositorioDeSelo, Selo};

class RepositorioDeSeloEmMemoria implements RepositorioDeSelo
{
    private array $selos = [];

    public function adiciona(Selo $selo): void
    {
        $this->selos[] = $selo;
    }

    public function selosDeAlunoComCpf(Cpf $cpf)
    {
        return array_filter($this->selos, fn (Selo $selo) => $selo->cpfAluno() == $cpf);
    }
}
