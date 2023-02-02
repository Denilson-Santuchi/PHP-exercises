<?php

class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);

        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    private function validaNome(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo 'nome precisa de ter 5 caracters no mínimo.' . PHP_EOL;
            exit();
        }
    }
}
