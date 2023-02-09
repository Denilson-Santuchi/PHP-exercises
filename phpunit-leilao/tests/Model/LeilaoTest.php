<?php

namespace Alura\Leilao\Tests\Model;

use Alura\Leilao\Model\{Lance, Leilao, Usuario};
use PHPUnit\Framework\TestCase;

class LeilaoTest extends TestCase
{
    /**
     * @dataProvider geraLances
     */
    public function testLeilaoDeveReceberLances(
        int $qtdLances,
        Leilao $leilao,
        array $valores
    ) {
        $this->assertCount($qtdLances, $leilao->getLances());
        foreach ($valores as $i => $valor) {
            $this->assertEquals($valor, $leilao->getLances()[$i]->getValor());
        }
    }

    public static function geraLances()
    {
        $joao = new Usuario('João');
        $maria = new Usuario('Maria');

        $leilaoCom2Lances = new Leilao('Fiat 147 0km');
        $leilaoCom2Lances->recebeLance(new Lance($joao, 1000));
        $leilaoCom2Lances->recebeLance(new Lance($maria, 2000));

        $leilaoCom1Lance = new Leilao('Fiat 147 0km');
        $leilaoCom1Lance->recebeLance(new Lance($joao, 5000));

        return [
            '2-lances' => [2, $leilaoCom2Lances, [1000, 2000]],
            '1-lance' => [1, $leilaoCom1Lance, [5000]]
        ];
    }
}
