# Declaração de Conteúdo Correios

**Gerador de declaração de conteúdo para postagem nos Correios**

[![Build Status](https://travis-ci.org/fontebasso/declaracao-conteudo-correios.svg?branch=main)](https://travis-ci.org/fontebasso/declaracao-conteudo-correios)
[![Maintainability](https://api.codeclimate.com/v1/badges/3c9b244202e9842607fe/maintainability)](https://codeclimate.com/github/fontebasso/declaracao-conteudo-correios/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/3c9b244202e9842607fe/test_coverage)](https://codeclimate.com/github/fontebasso/declaracao-conteudo-correios/test_coverage)
[![Latest Stable Version](https://poser.pugx.org/fontebasso/declaracao-conteudo-correios/v/stable)](https://packagist.org/packages/fontebasso/declaracao-conteudo-correios)
[![Latest Unstable Version](https://poser.pugx.org/fontebasso/declaracao-conteudo-correios/v/unstable)](https://packagist.org/packages/fontebasso/declaracao-conteudo-correios)
[![License](https://poser.pugx.org/fontebasso/declaracao-conteudo-correios/license)](https://packagist.org/packages/fontebasso/declaracao-conteudo-correios)

## Instalação

`composer require fontebasso/declaracao-conteudo-correios`

## Exemplo de uso

Criando um remetente:

```php
$remetente = new Fontebasso\Correios\DeclaracaoConteudo\Entities\Pessoa([
    'nome' => 'Click 4 Web - Marketing',
    'doc' => '12.398.650/0001-16',
    'endereco' => 'Rua Mandaguari, 400 - Vila Curuça',
    'cidade' => 'Santo André',
    'estado' => 'SP',
    'cep' => '09290-660'
]);
```

Criando um destinatário. É o mesmo objeto de remetente apenas mudei a forma de definir os atributos:

```php
$destinatario = new Fontebasso\Correios\DeclaracaoConteudo\Entities\Pessoa();
$destinatario->setNome('TagCool')
    ->setDoc('21.814.544/0001-67')
    ->setEndereco('Rua Albuquerque Lins, 128 - Jardim Paulista')
    ->setCidade('Ribeirão Preto')
    ->setEstado('SP')
    ->setCep('14090-010');
```

Criando uma mochila de itens:
 
```php
$itens = new \Fontebasso\Correios\DeclaracaoConteudo\Core\ItemBag([
    [
        'descricao' => 'Livro - 8Ps do Marketing Digital',
        'quantidade' => 1,
        'peso' => 0.733
    ],
    [
        'descricao' => 'Livro - Super Apresentações',
        'quantidade' => 1,
        'peso' => 0.397
    ],
]);
```

Exibindo a declaração de conteúdo:

```php
$declaracao = new \Fontebasso\Correios\DeclaracaoConteudo\DeclaracaoConteudo(
    $remetente,
    $destinatario,
    $itens,
    219.98 // Valor Total (R$)
);

echo $declaracao->imprimirHtml();
```

## Contribuindo

1. Faça o _fork_ do projeto (<https://github.com/fontebasso/declaracao-conteudo-correios/fork>)
2. Crie uma _branch_ para sua modificação (`git checkout -b feature/fooBar`)
3. Faça o _commit_ (`git commit -am 'Add some fooBar'`)
4. _Push_ (`git push origin feature/fooBar`)
5. Crie um novo _Pull Request_

## Licença

Esta biblioteca é um software open-source licenciado sob a licença MIT.
