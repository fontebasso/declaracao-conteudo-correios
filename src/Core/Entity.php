<?php

namespace Fontebasso\Correios\DeclaracaoConteudo\Core;

/**
 * Class Entity
 *
 * @package  Fontebasso\Correios\DeclaracaoConteudo
 * @subpackage Core
 * @author   fontebasso <samuel.txd@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
class Entity
{
    /**
     * Entity constructor.
     *
     * @param array $params Lista de atributos da Entidade
     */
    public function __construct($params = [])
    {
        foreach ($params as $param => $value) {
            if (property_exists($this, $param)) {
                $this->{$param} = $value;
            }
        }
    }
}
