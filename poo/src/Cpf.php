<?php

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    private function validaCpf($cpf): void
    {
        $regex = '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/';
        if (!preg_match($regex, $cpf)) {
            echo 'cpf invalido' . PHP_EOL;
            exit();
        }
    }
}
