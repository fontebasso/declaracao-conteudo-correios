<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Fontebasso\Correios\DeclaracaoConteudo\Core\ItemBag;
use Fontebasso\Correios\DeclaracaoConteudo\Entities\Item;

final class ItemBagTest extends TestCase
{
    public function testDefinirItensPorArray()
    {
        $itens = new \Fontebasso\Correios\DeclaracaoConteudo\Core\ItemBag([
            [
                'descricao' => 'Livro - 8Ps do Marketing Digital',
                'quantidade' => 1,
                'peso' => 0.733
            ],
            [
                'descricao' => 'Livro - Super Apresentações',
                'quantidade' => 1,
                'peso' => 0.397
            ]
        ]);

        $this->assertEquals([
            new Item([
                'descricao' => 'Livro - 8Ps do Marketing Digital',
                'quantidade' => 1,
                'peso' => 0.733
            ]),
            new Item([
                'descricao' => 'Livro - Super Apresentações',
                'quantidade' => 1,
                'peso' => 0.397
            ])
        ], $itens->getItems(), "\$canonicalize = true", $delta = 0.0, $maxDepth = 10, $canonicalize = true);
    }

    public function testAdicionarItem()
    {
        $itens = new ItemBag();

        $item = new Item([
            'descricao' => 'Livro - 8Ps do Marketing Digital',
            'quantidade' => 1,
            'peso' => 0.733
        ]);

        $itens->add($item);

        $this->assertEquals([
            new Item([
                'descricao' => 'Livro - 8Ps do Marketing Digital',
                'quantidade' => 1,
                'peso' => 0.733
            ]),
        ], $itens->getItems());
    }

    public function testAdicionarItensPorArrayDeObjetosItem()
    {
        $itens = new \Fontebasso\Correios\DeclaracaoConteudo\Core\ItemBag([
            new Item([
                'descricao' => 'Livro - Super Apresentações',
                'quantidade' => 1,
                'peso' => 0.397
            ])
        ]);

        $this->assertEquals([
            new Item([
                'descricao' => 'Livro - Super Apresentações',
                'quantidade' => 1,
                'peso' => 0.397
            ])
        ], $itens->getItems(), "\$canonicalize = true", $delta = 0.0, $maxDepth = 10, $canonicalize = true);
    }
}
