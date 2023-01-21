<?php

namespace Refu\SimpleCep;

use Refu\SimpleCep\ws\ViaCep;

class Search
{
    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        return $this->getFromServer($zipCode);
    }

    private function getFromServer(string $zipCode): array
    {
        $viaCep = new ViaCep();

        return (array) $viaCep->get($zipCode);
    }
}
