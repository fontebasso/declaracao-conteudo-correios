<?php

namespace Fontebasso\Correios\DeclaracaoConteudo\Core;

use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\ItemBagInterface;
use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\ItemInterface;
use InvalidArgumentException;

class ItemBag implements ItemBagInterface
{
    /**
     * @var array<ItemInterface> $items
     */
    private array $items = [];

    /**
     * @param array<ItemInterface> $items
     * @param string $classItem
     */
    public function __construct(
        array $items = [],
        string $classItem = '\\Fontebasso\\Correios\\DeclaracaoConteudo\\Entities\\Item'
    ) {
        foreach ($items as $item) {
            if (!$item instanceof $classItem) {
                if (!class_exists($classItem) && !is_subclass_of($classItem, ItemInterface::class)) {
                    throw new InvalidArgumentException("Class $classItem does not exist or is not a subclass of ItemInterface");
                }
                /** @var ItemInterface $item */
                $item = new $classItem($item);
            }
            $this->items[] = $item;
        }
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function add(ItemInterface $item): ItemBagInterface
    {
        $this->items[] = $item;
        return $this;
    }
}
