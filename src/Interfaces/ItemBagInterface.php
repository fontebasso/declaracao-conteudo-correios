<?php

namespace Fontebasso\Correios\DeclaracaoConteudo\Interfaces;

interface ItemBagInterface
{
    /**
     * @return array<int, ItemInterface>
     */
    public function getItems(): array;

    public function add(ItemInterface $item): ItemBagInterface;
}
