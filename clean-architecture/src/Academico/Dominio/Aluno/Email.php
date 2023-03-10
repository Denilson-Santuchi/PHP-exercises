<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Stringable;

class Email implements Stringable
{
    private string $endereco;

    public function __construct(string $endereco)
    {
        $this->validaEmail($endereco);
    }

    private function validaEmail(string $endereco): void
    {
        if (filter_var($endereco, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException(
                'Endereço de e-mail inválido.'
            );
        }
        $this->endereco = $endereco;
    }

    public function __toString(): string
    {
        return $this->endereco;
    }
}
