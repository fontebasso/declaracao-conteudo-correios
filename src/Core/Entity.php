<?php

namespace Fontebasso\Correios\DeclaracaoConteudo\Core;

class Entity
{
    /**
     * @param array<string, mixed> $params
     */
    public function __construct(array $params = [])
    {
        foreach ($params as $param => $value) {
            if (property_exists($this, $param)) {
                $this->{$param} = $value;
            }
        }
    }
}
