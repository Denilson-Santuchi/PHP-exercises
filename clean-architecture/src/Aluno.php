<?php

namespace Alura\Arquitetura;

class Aluno
{
    private string $cpf;
    private string $nome;
    private Email $email;
    private array $telefones;

    public function __construct(string $cpf, string $nome, Email $email)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function adicionarTelefone(string $ddd, string $numero): void
    {
        $this->telefones[] = new Telefone($ddd, $numero);
    }
}
