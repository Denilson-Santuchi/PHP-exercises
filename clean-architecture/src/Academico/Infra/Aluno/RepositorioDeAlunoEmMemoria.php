<?php

namespace Alura\Arquitetura\Academico\Infra\Aluno;

use Alura\Arquitetura\Academico\Dominio\Aluno\{
    RepositorioDeAlunos,
    Aluno,
    AlunoNaoEncontrado,
    Cpf
};

class RepositorioDeAlunoEmMemoria implements RepositorioDeAlunos
{
    private array $alunos = [];

    public function adicionar(Aluno $aluno): void
    {
        $this->alunos[] = $aluno;
    }

    public function buscarPorCpf(Cpf $cpf): Aluno
    {
        $alunosFiltrados = array_filter($this->alunos, fn (Aluno $aluno) => $aluno->cpf() == $cpf);

        if (count($alunosFiltrados) === 0) {
            throw new AlunoNaoEncontrado($cpf);
        };

        if (count($alunosFiltrados) > 1) {
            throw new \Exception('error');
        };

        return $alunosFiltrados[0];
    }
}
