<?php

namespace Fontebasso\Correios\DeclaracaoConteudo\Interfaces;

interface ItemInterface
{
    public function getDescricao(): string;

    public function getQuantidade(): int;

    public function getPeso(): float;
}
