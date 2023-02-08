<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Stringable;

class Cpf implements Stringable
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpf($cpf);
    }

    private function validaCpf(string $cpf): void
    {
        if (filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]) === false) {
            throw new \InvalidArgumentException(
                'CPF no formato inválido'
            );
        }
        $this->cpf = $cpf;
    }

    public function __toString(): string
    {
        return $this->cpf;
    }
}
