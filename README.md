# Declaração de Conteúdo Correios

**Gerador de declaração de conteúdo para postagem nos Correios**

[![Build Status](https://travis-ci.com/fontebasso/declaracao-conteudo-correios.svg?branch=main)](https://travis-ci.com/fontebasso/declaracao-conteudo-correios)
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
$remetente = new JeffersonCamargo\Correios\DeclaracaoConteudo\Entities\Pessoa([
    'nome' => 'B2W - Companhia Digita',
    'doc' => '00.776.574/0006-60',
    'endereco' => 'Rua Sacadura Cabral, 102',
    'cidade' => 'Rio de Janeiro',
    'estado' => 'RJ',
    'cep' => '20081-902'
]);
```

Criando um destinatário. É o mesmo objeto de remetente apenas mudei a forma de definir os atributos:

```php
$destinatario = new JeffersonCamargo\Correios\DeclaracaoConteudo\Entities\Pessoa();
$destinatario->setNome('Jhon Doe')
    ->setDoc('000.000.000-00')
    ->setEndereco('Av. Paulista, 000 - Bela Vista')
    ->setCidade('São Paulo')
    ->setEstado('SP')
    ->setCep('01310-100');
```

Criando uma mochila de itens:
 
```php
$itens = new \JeffersonCamargo\Correios\DeclaracaoConteudo\Core\ItemBag([
    [
        'descricao' => 'Smartphone Motorola Moto G 5G 128GB',
        'quantidade' => 1,
        'peso' => 0.212
    ],
    [
        'descricao' => 'Caixa Bombom Especialidades 251g',
        'quantidade' => 2,
        'peso' => 0.251
    ],
]);
```

Exibindo a declaração de conteúdo:

```php
$declaracao = new \JeffersonCamargo\Correios\DeclaracaoConteudo\DeclaracaoConteudo(
    $remetente,
    $destinatario,
    $itens,
    2018.97 // Valor Total (R$)
);

echo $declaracao->imprimirHtml();
```

## Licença

The MIT License (MIT). Veja o [arquivo de licença](LICENSE) para mais informações.
