<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(Cpf $cpf, string $nome, string $cargo, string $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function recuperacargo()
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function recebeAumento(float $aumento): void
    {
        if ($aumento < 0) {
            echo 'aumento deve ser positivo';
            return;
        }

        $this->salario += $aumento;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}
