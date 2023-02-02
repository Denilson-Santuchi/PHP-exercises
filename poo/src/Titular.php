<?php

class Titular
{
    private Cpf $cpfDoTitular;
    private string $nomeDoTitular;
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->validaNome($nome);

        $this->cpfDoTitular = $cpf;
        $this->nomeDoTitular = $nome;
        $this->endereco = $endereco;
    }

    public function recuperaNomeDoTitular(): string
    {
        return $this->nomeDoTitular;
    }

    private function validaNome(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo 'nome precisa de ter 5 caracters no mínimo.' . PHP_EOL;
            exit();
        }
    }

    public function recuperaCpfDoTitular(): string
    {
        return $this->cpfDoTitular->recuperaCpf();
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
