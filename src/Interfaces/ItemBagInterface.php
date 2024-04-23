<?php
namespace JeffersonCamargo\Correios\DeclaracaoConteudo\Interfaces;

/**
 * Interface ItemBagInterface
 *
 * @package JeffersonCamargo\Correios\DeclaracaoConteudo
 * @subpackage Interfaces
 * @author   fontebasso <samuel.txd@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
interface ItemBagInterface
{
    /**
     * Recupera itens para declaração
     *
     * @return array Lista de objetos Item
     */
    public function getItens(): array;

    /**
     * Adiciona um item a lista
     *
     * @param  ItemInterface $item Item
     * @return ItemBagInterface
     */
    public function add(ItemInterface $item): ItemBagInterface;
}
