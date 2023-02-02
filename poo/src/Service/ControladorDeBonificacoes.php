<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalDeBonificacoes = 0;

    public function adicionaBonificacoesDe(Funcionario $funcionario)
    {
        $this->totalDeBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaBonificacoes(): float
    {
        return $this->totalDeBonificacoes;
    }
}
