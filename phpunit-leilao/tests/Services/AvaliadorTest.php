<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\{Lance, Leilao, Usuario};
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    private Avaliador $leiloeiro;

    protected function setUp(): void
    {
        $this->leiloeiro = new Avaliador();
    }

    /** 
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testMaiorValor(Leilao $leilao)
    {
        $this->leiloeiro->avalia($leilao);

        $maiorValor = $this->leiloeiro->getMaiorValor();
        $this->assertEquals(3000, $maiorValor);
    }

    /** 
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function testMenorValor(Leilao $leilao)
    {
        $this->leiloeiro->avalia($leilao);

        $menorValor = $this->leiloeiro->getMenorValor();
        $this->assertEquals(1500, $menorValor);
    }

    /** 
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */
    public function test3MaioresLances(Leilao $leilao)
    {
        $this->leiloeiro->avalia($leilao);

        $maiores = $this->leiloeiro->getMaioresLances();
        $this->assertCount(3, $maiores);
        $this->assertEquals(3000, $maiores[0]->getValor());
        $this->assertEquals(2500, $maiores[1]->getValor());
        $this->assertEquals(2000, $maiores[2]->getValor());
    }

    public static function leilaoEmOrdemCrescente()
    {
        $leilao = new Leilao('Gol Bolinha 0KM');
        $joao = new Usuario('João');
        $denilson = new Usuario('Denilson');
        $maria = new Usuario('Maria');
        $vitor = new Usuario('Vitor');

        $leilao->recebeLance(new Lance($denilson, 3000));
        $leilao->recebeLance(new Lance($vitor, 2500));
        $leilao->recebeLance(new Lance($maria, 2000));
        $leilao->recebeLance(new Lance($joao, 1500));

        return [
            [$leilao]
        ];
    }

    public static function leilaoEmOrdemDecrescente()
    {
        $leilao = new Leilao('Gol Bolinha 0KM');
        $joao = new Usuario('João');
        $denilson = new Usuario('Denilson');
        $maria = new Usuario('Maria');
        $vitor = new Usuario('Vitor');

        $leilao->recebeLance(new Lance($joao, 1500));
        $leilao->recebeLance(new Lance($maria, 2000));
        $leilao->recebeLance(new Lance($vitor, 2500));
        $leilao->recebeLance(new Lance($denilson, 3000));

        return [
            [$leilao]
        ];
    }

    public static function leilaoEmOrdemAleatoria()
    {
        $leilao = new Leilao('Gol Bolinha 0KM');
        $joao = new Usuario('João');
        $denilson = new Usuario('Denilson');
        $maria = new Usuario('Maria');
        $vitor = new Usuario('Vitor');

        $leilao->recebeLance(new Lance($maria, 2000));
        $leilao->recebeLance(new Lance($denilson, 3000));
        $leilao->recebeLance(new Lance($joao, 1500));
        $leilao->recebeLance(new Lance($vitor, 2500));

        return [
            [$leilao]
        ];
    }
}
