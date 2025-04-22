<?php

namespace Fontebasso\Correios\DeclaracaoConteudo\Core;

class Controller
{
    /**
     * @param string $name
     * @param array<string, mixed> $vars
     * @return false|string
     */
    public function view(string $name, array $vars = []): false|string
    {
        extract($vars);
        ob_start();
        include __DIR__ . DIRECTORY_SEPARATOR .
            '..' . DIRECTORY_SEPARATOR .
            'Resources' . DIRECTORY_SEPARATOR .
            'views' . DIRECTORY_SEPARATOR .
            $name . '.php'
        ;
        return ob_get_clean();
    }
}
