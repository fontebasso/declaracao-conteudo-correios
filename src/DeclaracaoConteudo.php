<?php

namespace Fontebasso\Correios\DeclaracaoConteudo;

use Fontebasso\Correios\DeclaracaoConteudo\Core\Controller;
use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\ItemBagInterface;
use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\PessoaInterface;

class DeclaracaoConteudo extends Controller
{
    private PessoaInterface $remetente;
    private PessoaInterface $destinatario;
    private ItemBagInterface $items;
    private float $valorTotal;

    public function __construct(
        PessoaInterface $remetente,
        PessoaInterface $destinatario,
        ItemBagInterface $items,
        float $valorTotal = 0.00
    ) {
        $this->remetente = $remetente;
        $this->destinatario = $destinatario;
        $this->items = $items;
        $this->valorTotal = $valorTotal;
    }

    public function imprimirHtml(): bool|string
    {
        return $this->view('declaracao-conteudo-bootstrap', [
            'remetente' => $this->remetente,
            'destinatario' => $this->destinatario,
            'items' => $this->items,
            'valorTotal' => $this->valorTotal
        ]);
    }
}
