<?php

namespace Fontebasso\Correios\DeclaracaoConteudo\Entities;

use Fontebasso\Correios\DeclaracaoConteudo\Core\Entity;
use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\PessoaInterface;

class Pessoa extends Entity implements PessoaInterface
{
    protected string $nome;

    protected string $doc;

    protected string $endereco;
    protected string $cidade;
    protected string $estado;
    protected string $cep;

    public function setNome(string $nome): Pessoa
    {
        $this->nome = $nome;
        return $this;
    }

    public function setDoc(string $doc): Pessoa
    {
        $this->doc = $doc;
        return $this;
    }

    public function setEndereco(string $endereco): Pessoa
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function setCidade(string $cidade): Pessoa
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function setEstado(string $estado): Pessoa
    {
        $this->estado = $estado;
        return $this;
    }

    public function setCep(string $cep): Pessoa
    {
        $this->cep = $cep;
        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDoc(): string
    {
        return $this->doc;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }
}
