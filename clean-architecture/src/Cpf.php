<?php

namespace Alura\Arquitetura;

use Stringable;

class Cpf implements Stringable
{
    private Cpf $cpf;

    public function __construct(Cpf $cpf)
    {
        $this->validaCpf($cpf);
    }

    public function validaCpf(Cpf $cpf): void
    {
        if (filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]) === false) {
            throw new \InvalidArgumentException(
                'CPF inválido'
            );
        }
        $this->cpf = $cpf;
    }

    public function __toString(): string
    {
        return $this->cpf;
    }
}
