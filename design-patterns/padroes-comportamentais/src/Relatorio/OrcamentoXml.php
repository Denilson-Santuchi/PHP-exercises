<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoXml
{
    public function exportar(Orcamento $orcamento): string
    {
        $element = new \SimpleXMLElement('<orcamento/>');
        $element->addChild('valor', $orcamento->valor);
        $element->addChild('quantidade', $orcamento->quantidade);

        return $element->asXML();
    }
}
