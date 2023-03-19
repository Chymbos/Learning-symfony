<?php

namespace App\Service;

trait Aninal
{

    private ?string $name = null;

    public function getNameCat(): string
    {
        return $this->name;
    }

    public function setNameCat($name): self
    {
        $this->name = $name;
        return $this;
    }
    public function meow(): void
    {
        echo sprintf('%s says meow ', $this->name);
    }

}