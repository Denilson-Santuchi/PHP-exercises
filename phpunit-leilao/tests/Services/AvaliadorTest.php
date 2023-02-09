<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    public function testMaiorValorEmOrdemCrescente()
    {
        $leilao = new Leilao('Fiat 147 OKM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('Joao');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();
        $this->assertEquals(2500, $maiorValor);
    }

    public function testMaiorValorEmOrdemDecrescente()
    {
        $leilao = new Leilao('Fiat 147 OKM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('Joao');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();
        $this->assertEquals(2500, $maiorValor);
    }

    public function testMenorValorEmOrdemDecrescente()
    {
        $leilao = new Leilao('Fiat 147 OKM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('Joao');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();
        $this->assertEquals(2000, $menorValor);
    }

    public function testMenorValorEmOrdemCrescente()
    {
        $leilao = new Leilao('Fiat 147 OKM');

        $maria = new Usuario('Maria');
        $joao = new Usuario('Joao');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();
        $this->assertEquals(2000, $menorValor);
    }

    public function test3MaioresLances()
    {
        $leilao = new Leilao('Gol Bolinha 0KM');
        $joao = new Usuario('João');
        $denilson = new Usuario('Denilson');
        $maria = new Usuario('Maria');
        $vitor = new Usuario('Vitor');

        $leilao->recebeLance(new Lance($joao, 1500));
        $leilao->recebeLance(new Lance($denilson, 3000));
        $leilao->recebeLance(new Lance($maria, 2000));
        $leilao->recebeLance(new Lance($vitor, 2500));

        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiores = $leiloeiro->getMaioresLances();
        $this->assertCount(3, $maiores);
        $this->assertEquals(3000, $maiores[0]->getValor());
        $this->assertEquals(2500, $maiores[1]->getValor());
        $this->assertEquals(2000, $maiores[2]->getValor());
    }
}
