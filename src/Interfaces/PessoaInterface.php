<?php

namespace Fontebasso\Correios\DeclaracaoConteudo\Interfaces;

interface PessoaInterface
{
    public function getNome(): string;

    public function getDoc(): string;

    public function getEndereco(): string;

    public function getCidade(): string;

    public function getEstado(): string;

    public function getCep(): string;
}
