# Declaração de Conteúdo Correios

**Gerador de declaração de conteúdo para postagem nos Correios**

[![tests](https://github.com/fontebasso/declaracao-conteudo-correios/actions/workflows/tests.yml/badge.svg)](https://github.com/fontebasso/declaracao-conteudo-correios/actions/workflows/tests.yml)
[![Maintainability](https://qlty.sh/badges/2ae33bc0-ec2b-4988-8005-3a30b66d2b83/maintainability.svg)](https://qlty.sh/gh/fontebasso/projects/declaracao-conteudo-correios)
[![Code Coverage](https://qlty.sh/badges/2ae33bc0-ec2b-4988-8005-3a30b66d2b83/test_coverage.svg)](https://qlty.sh/gh/fontebasso/projects/declaracao-conteudo-correios)
[![Latest Stable Version](https://poser.pugx.org/fontebasso/declaracao-conteudo-correios/v/stable)](https://packagist.org/packages/fontebasso/declaracao-conteudo-correios)
[![Total Downloads](http://poser.pugx.org/fontebasso/declaracao-conteudo-correios/downloads)](https://packagist.org/packages/fontebasso/declaracao-conteudo-correios)
[![License](https://poser.pugx.org/fontebasso/declaracao-conteudo-correios/license)](https://packagist.org/packages/fontebasso/declaracao-conteudo-correios)

## Principais recursos

- Suporte a PHP 8.2, 8.3 e 8.4
- Compatível com PSR-12
- Uso do Carbon para manipulação de datas
- Testes automatizados com PHPUnit 11
- Geração de declaração em HTML para impressão direta

## Requisitos

- PHP 8.2 ou superior
- Composer v2

## Instalação

`composer require fontebasso/declaracao-conteudo-correios`

## Exemplo de uso

Criando um remetente:

```php
$remetente = new Fontebasso\Correios\DeclaracaoConteudo\Entities\Pessoa([
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
$destinatario = new Fontebasso\Correios\DeclaracaoConteudo\Entities\Pessoa();
$destinatario->setNome('Jhon Doe')
    ->setDoc('000.000.000-00')
    ->setEndereco('Av. Paulista, 000 - Bela Vista')
    ->setCidade('São Paulo')
    ->setEstado('SP')
    ->setCep('01310-100');
```

Criando uma mochila de itens:
 
```php
$itens = new \Fontebasso\Correios\DeclaracaoConteudo\Core\ItemBag([
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
$declaracao = new \Fontebasso\Correios\DeclaracaoConteudo\DeclaracaoConteudo(
    $remetente,
    $destinatario,
    $itens,
    2018.97 // Valor Total (R$)
);

echo $declaracao->imprimirHtml();
```

## Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais detalhes.
