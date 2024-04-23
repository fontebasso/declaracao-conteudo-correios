<?php
namespace JeffersonCamargo\Correios\DeclaracaoConteudo\Interfaces;

/**
 * Interface ItemInterface
 *
 * @package JeffersonCamargo\Correios\DeclaracaoConteudo
 * @subpackage Interfaces
 * @author   fontebasso <samuel.txd@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
interface ItemInterface
{
    /**
     * Recupera a descrição do Item
     *
     * @return string
     */
    public function getDescricao(): string;

    /**
     * Recupera a Quantidade do Item
     *
     * @return int
     */
    public function getQuantidade(): int;

    /**
     * Recupera o Peso do Item
     *
     * @return float
     */
    public function getPeso(): float;
}
