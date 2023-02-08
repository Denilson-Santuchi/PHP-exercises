<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

class LimitaTelefones extends \DomainException
{
    public function __construct()
    {
        parent::__construct("Limite máximo de telefones atingido");
    }
}
