<?php

namespace Alura\Arquitetura\Dominio\Aluno;

interface RepositorioDeAlunos
{
    public function adicionar(Aluno $aluno): void;
    public function buscarPorCpf(Cpf $cpf): void;
    /** @return Aluno[] */
    public function buscarTodos(): array;
}
