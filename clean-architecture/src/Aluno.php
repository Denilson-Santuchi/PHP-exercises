<?php

namespace Alura\Arquitetura;

class Aluno
{
    private string $cpf;
    private string $nome;
    private Email $email;
    public array $telefones;

    public function adicionarTelefone(string $ddd, string $numero): void
    {
        $this->telefones[] = new Telefone($ddd, $numero);
    }
}
