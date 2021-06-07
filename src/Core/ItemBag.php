<?php
namespace Fontebasso\Correios\DeclaracaoConteudo\Core;

use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\ItemBagInterface;
use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\ItemInterface;

/**
 * Class ItemBag
 *
 * @package  Fontebasso\Correios\DeclaracaoConteudo
 * @subpackage Core
 * @author   fontebasso <samuel.txd@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
class ItemBag implements ItemBagInterface
{
    private $itens = [];

    public function __construct(array $itens = [], $classItem = '\\Fontebasso\\Correios\\DeclaracaoConteudo\\Entities\\Item')
    {
        foreach ($itens as $item) {
            if ($item instanceof $classItem) {
                $this->itens[] = $item;
            } else {
                $this->itens[] = new $classItem($item);
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function getItens(): array
    {
        return $this->itens;
    }

    /**
     * @inheritDoc
     */
    public function add(ItemInterface $item): ItemBagInterface
    {
        $this->itens[] = $item;
        return $this;
    }
}
