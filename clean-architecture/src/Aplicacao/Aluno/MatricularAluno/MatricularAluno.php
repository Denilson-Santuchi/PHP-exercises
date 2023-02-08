<?php

namespace Alura\Arquitetura\Aplicacao\Aluno\MatricularAluno;

use Alura\Arquitetura\Dominio\Aluno\{RepositorioDeAlunos, Aluno};

class MatricularAluno
{
    private RepositorioDeAlunos $repositorioDeAlunos;

    public function __construct(RepositorioDeAlunos $repositorioDeAlunos)
    {
        $this->repositorioDeAlunos = $repositorioDeAlunos;
    }

    public function executa(MatricularAlunoDto $dados): void
    {
        $aluno = Aluno::comCpfNomeEEmail($dados->cpfAluno, $dados->nomeAluno, $dados->emailAluno);
        $this->repositorioDeAlunos->adicionar($aluno);
    }
}
