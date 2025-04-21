<?php

namespace Fontebasso\Correios\DeclaracaoConteudo;

use Fontebasso\Correios\DeclaracaoConteudo\Core\Controller;
use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\ItemBagInterface;
use Fontebasso\Correios\DeclaracaoConteudo\Interfaces\PessoaInterface;

/**
 * Class DeclaracaoConteudo
 *
 * Declaração de Conteúdo para encomendas enviadas via Correios
 *
 * @package  Fontebasso\Correios\DeclaracaoConteudo
 * @author   fontebasso <samuel.txd@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
class DeclaracaoConteudo extends Controller
{
    private $remetente;
    private $destinatario;
    private $itens;
    private $valorTotal;

    /**
     * DeclaracaoConteudo constructor.
     *
     * @param PessoaInterface  $remetente
     * @param PessoaInterface  $destinatario
     * @param ItemBagInterface $itens
     * @param string|int       $valorTotal
     */
    public function __construct(
        PessoaInterface $remetente,
        PessoaInterface $destinatario,
        ItemBagInterface $itens,
        $valorTotal = 0.00
    ) {
        $this->remetente = $remetente;
        $this->destinatario = $destinatario;
        $this->itens = $itens;
        $this->valorTotal = $valorTotal;
    }

    /**
     * Imprimir Declaração de Conteúdo em HTML
     */
    public function imprimirHtml()
    {
        return $this->view('declaracao-conteudo-bootstrap', [
            'remetente' => $this->remetente,
            'destinatario' => $this->destinatario,
            'itens' => $this->itens,
            'valorTotal' => $this->valorTotal
        ]);
    }
}
