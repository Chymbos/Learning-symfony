<?php

namespace App\Service;

class ChumbaClass
{
    public function __construct(
        private ?string $chumbaName = null
    ){
    }

    public function setChumbaName(?string $chumbaName): self
    {
        $this->chumbaName = $chumbaName;

        return $this;
    }

    public function getChumbaName(): ?string
    {
        return $this->chumbaName;
    }
}