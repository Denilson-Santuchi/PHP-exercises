<?php

use Alura\Arquitetura\Gameficacao\Dominio\Selo\{RepositorioDeSelo, Selo};
use Alura\Arquitetura\Shared\Dominio\Evento\{OuvinteDeEvento, Evento};

class GeraSeloDeNovato extends OuvinteDeEvento
{
    private RepositorioDeSelo $repositorioDeSelo;

    public function __construct(RepositorioDeSelo $repositorioDeSelo)
    {
        $this->repositorioDeSelo = $repositorioDeSelo;
    }

    public function sabeProcessar(Evento $evento): bool
    {
        return get_class($evento) === 'Alura\Arquitetura\Academico\Dominio\Aluno\AlunoMatriculado';
    }


    public function reageAo(Evento $evento): void
    {
        $array = $evento->jsonSerialize();
        $cpf = $array['cpfAluno'];

        $selo = new Selo($cpf, 'Novato');
        $this->repositorioDeSelo->adiciona($selo);
    }
}
