<?php

namespace Alura\DesignPattern;

class CacheOrcamentoproxy extends Orcamento
{
    private float $valorCache;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
        $this->valorCache = 0;
    }

    public function addItem(Orcavel $item): void
    {
        throw new \DomainException("Não é possível adicionar item");
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return 0;
    }
}
