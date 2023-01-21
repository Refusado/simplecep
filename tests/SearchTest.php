<?php

use PHPUnit\Framework\TestCase;
use Refu\SimpleCep\Search;

class SearchTest extends TestCase
{
  /**
   * @dataProvider dataProvider
   */
  public function testGetAddressFromZipcodeDefaultUsage(string $codeInput, array $expected): void {
    $search = new Search;
    $result = $search->getAddressFromZipcode($codeInput);

    $this->assertEquals($expected, $result);
  }

  public function dataProvider(): array {
    return [
      "Praça de Sé" => [
        "01001000",
        [
          "cep" => "01001-000",
          "logradouro" => "Praça da Sé",
          "complemento" => "lado ímpar",
          "bairro" => "Sé",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "ibge" => "3550308",
          "gia" => "1004",
          "ddd" => "11",
          "siafi" => "7107",
        ]
      ],
      "Filipe de Oliveira" => [
        "01001010",
        [
          "cep" => "01001-010",
          "logradouro" => "Rua Filipe de Oliveira",
          "complemento" => "",
          "bairro" => "Sé",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "ibge" => "3550308",
          "gia" => "1004",
          "ddd" => "11",
          "siafi" => "7107"
        ]
      ]
    ];
  }
};