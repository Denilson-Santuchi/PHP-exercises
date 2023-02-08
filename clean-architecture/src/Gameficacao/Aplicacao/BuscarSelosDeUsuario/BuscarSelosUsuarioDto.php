<?php

namespace Alura\Arquitetura\Gameficacao\Aplicacao\BuscarSelosDeUsuario;

class BuscarSelosUsuarioDto
{
    public string $cpfAluno;

    public function __construct(string $cpfAluno)
    {
        $this->cpfAluno = $cpfAluno;
    }
}