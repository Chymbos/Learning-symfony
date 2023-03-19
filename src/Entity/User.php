<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class User
{
    public function __construct(
        #[ORM\Column(type: 'string', length: 40)]
        private string $firstName,
        #[ORM\Column(type: 'string', length: 40)]
        private string $lastName,
        #[ORM\Column(type: 'string', length: 40)]
        private string $patronymic,
        #[ORM\Column(type: 'string', length: 25)]
        private string $username,
        #[ORM\Column(type: 'string')]
        private string $email,
        #[ORM\Column(type: 'string', length: 30)]
        private string $password
    ) {
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getPatronymic(): string
    {
        return $this->patronymic;
    }

    public function setPatronymic(string $patronymic): void
    {
        $this->patronymic = $patronymic;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}