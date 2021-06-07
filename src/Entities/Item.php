<?php
namespace Fontebasso\Correios\DeclaracaoConteudo\Entities;

use Fontebasso\Correios\DeclaracaoConteudo\Core\Entity;
use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\ItemInterface;

/**
 * Class Item
 *
 * @package  Fontebasso\Correios\DeclaracaoConteudo
 * @subpackage Entities
 * @author   fontebasso <samuel.txd@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
class Item extends Entity implements ItemInterface
{
    /**
     * @var string $descricao Descrição do item
     */
    protected $descricao;

    /**
     * @var int $quantidade Quantidade do item
     */
    protected $quantidade;

    /**
     * @var float $peso Peso Total do Item
     */
    protected $peso;

    /**
     * Define a Discriminação do Conteúdo
     *
     * @param  string $descricao Discriminação do Conteúdo
     * @return Item
     */
    public function setDescricao($descricao): Item
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * Define a quantidade de itens
     *
     * @param  int $quantidade Quantidade de Itens
     * @return Item
     */
    public function setQuantidade($quantidade): Item
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * Define o peso do item descrito
     *
     * @param  float $peso Peso do Item
     * @return Item
     */
    public function setPeso($peso): Item
    {
        $this->peso = $peso;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @inheritDoc
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * @inheritDoc
     */
    public function getPeso(): float
    {
        return $this->peso;
    }
}
