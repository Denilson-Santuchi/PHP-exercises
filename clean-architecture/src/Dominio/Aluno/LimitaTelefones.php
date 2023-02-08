<?php

namespace Alura\Arquitetura\Dominio\Aluno;

class LimitaTelefones extends \DomainException
{
    public function __construct()
    {
        parent::__construct("Limite máximo de telefones atingido");
    }
}
