<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

interface RepositorioDeAlunos
{
    public function adicionar(Aluno $aluno): void;
    public function buscarPorCpf(Cpf $cpf): Aluno;
}
