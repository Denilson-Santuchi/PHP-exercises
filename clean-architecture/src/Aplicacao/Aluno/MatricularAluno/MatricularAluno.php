<?php

namespace Alura\Arquitetura\Aplicacao\Aluno\MatricularAluno;

use Alura\Arquitetura\Dominio\Aluno\{RepositorioDeAlunos, Aluno, AlunoMatriculado, LogDeAlunoMatriculado};
use Alura\Arquitetura\Dominio\PublicadorDeEvento;

class MatricularAluno
{
    private RepositorioDeAlunos $repositorioDeAlunos;
    private PublicadorDeEvento $publicador;

    public function __construct(RepositorioDeAlunos $repositorioDeAlunos, PublicadorDeEvento $publicador)
    {
        $this->repositorioDeAlunos = $repositorioDeAlunos;
        $this->publicador = $publicador;
    }

    public function executa(MatricularAlunoDto $dados): void
    {
        $aluno = Aluno::comCpfNomeEEmail($dados->cpfAluno, $dados->nomeAluno, $dados->emailAluno);
        $this->repositorioDeAlunos->adicionar($aluno);

        $evento = new AlunoMatriculado($aluno->cpf());
        $this->publicador->publicar($evento);
    }
}
