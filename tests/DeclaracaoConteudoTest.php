<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use JeffersonCamargo\Correios\DeclaracaoConteudo\Core\ItemBag;
use JeffersonCamargo\Correios\DeclaracaoConteudo\Entities\Item;

final class DeclaracaoConteudoTest extends TestCase
{
    public function testImprimirHtml()
    {
        $remetente = new JeffersonCamargo\Correios\DeclaracaoConteudo\Entities\Pessoa([
            'nome' => 'Click 4 Web - Marketing',
            'doc' => '12.398.650/0001-16',
            'endereco' => 'Rua Mandaguari, 400 - Vila Curuça',
            'cidade' => 'Santo André',
            'estado' => 'SP',
            'cep' => '09290-660'
        ]);

        $destinatario = new JeffersonCamargo\Correios\DeclaracaoConteudo\Entities\Pessoa();
        $destinatario->setNome('TagCool')
            ->setDoc('21.814.544/0001-67')
            ->setEndereco('Rua Albuquerque Lins, 128 - Jardim Paulista')
            ->setCidade('Ribeirão Preto')
            ->setEstado('SP')
            ->setCep('14090-010');

        $itens = new \JeffersonCamargo\Correios\DeclaracaoConteudo\Core\ItemBag([
            [
                'descricao' => 'Livro - 8Ps do Marketing Digital',
                'quantidade' => 1,
                'peso' => 0.733
            ],
            [
                'descricao' => 'Livro - Super Apresentações',
                'quantidade' => 1,
                'peso' => 0.397
            ],
        ]);

        $declaracao = new \JeffersonCamargo\Correios\DeclaracaoConteudo\DeclaracaoConteudo(
            $remetente,
            $destinatario,
            $itens,
            219.98
        );
        $this->assertEquals(TRUE, is_string($declaracao->imprimirHtml()));
    }
}
