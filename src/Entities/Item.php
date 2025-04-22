<?php

namespace Fontebasso\Correios\DeclaracaoConteudo\Entities;

use Fontebasso\Correios\DeclaracaoConteudo\Core\Entity;
use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\ItemInterface;

class Item extends Entity implements ItemInterface
{
    protected string $descricao;

    protected int $quantidade;

    protected float $peso;

    public function setDescricao(string $descricao): Item
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function setQuantidade(int $quantidade): Item
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function setPeso(float $peso): Item
    {
        $this->peso = $peso;
        return $this;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }
}
