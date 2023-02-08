<?php

namespace Alura\Arquitetura\Gameficacao\Aplicacao\BuscarSelosDeUsuario;

use Alura\Arquitetura\Gameficacao\Dominio\Selo\RepositorioDeSelo;
use Alura\Arquitetura\Shared\Dominio\Cpf;

class BuscarSelosUsuario
{
    public RepositorioDeSelo $repositorioDeSelo;

    public function __construct(RepositorioDeSelo $repositorioDeSelo)
    {
        $this->repositorioDeSelo = $repositorioDeSelo;
    }

    public function execute(BuscarSelosUsuarioDto $dados)
    {
        $cpfAluno = new Cpf($dados->cpfAluno);
        $selos = $this->repositorioDeSelo->selosDeAlunoComCpf($cpfAluno);

        return $selos;
    }
}
