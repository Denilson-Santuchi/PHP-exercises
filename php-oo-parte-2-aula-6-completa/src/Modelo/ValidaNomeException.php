<?php

namespace Alura\Banco\Model;

class ValidaNomeException extends \DomainException
{
    public function __construct(string $nome)
    {
        $mensagem = "$nome: Seu nome precisa ter pelo menos 5 caracteres";
        parent::__construct($mensagem);
    }
}
