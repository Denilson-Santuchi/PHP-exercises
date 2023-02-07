<?php

namespace Alura\Arquitetura;

class FabricaAluno
{
    private Aluno $aluno;

    public function comCpfEmailENome(string $cpf, string $nome, string $email): self
    {
        $this->aluno = new Aluno(new Cpf($cpf), $nome, new Email($email));
        return $this;
    }

    public function adionaTelefone(string $ddd, string $numero): self
    {
        $this->aluno->adicionarTelefone($ddd, $numero);
        return $this;
    }

    public function aluno(): Aluno
    {
        return $this->aluno;
    }
}
