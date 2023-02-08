<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Stringable;

class Telefone implements Stringable
{
    private string $ddd;
    private string $numero;

    public function __construct(string $ddd, string $numero)
    {
        $this->validaDdd($ddd);
        $this->validaNumero($numero);
    }

    private function validaDdd(string $ddd): void
    {
        if (filter_var($ddd, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{2}$/'
            ]
        ]) === false) {
            throw new \InvalidArgumentException(
                'DDD no formato inválido'
            );
        }
        $this->ddd = $ddd;
    }

    private function validaNumero(string $numero): void
    {
        if (filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{4,5}\-[0-9]{4}$/'
            ]
        ]) === false) {
            throw new \InvalidArgumentException(
                'numero no formato inválido'
            );
        }
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "({$this->ddd}) {$this->numero}";
    }

    public function ddd(): string
    {
        return $this->ddd;
    }

    public function numero(): string
    {
        return $this->numero;
    }
}
