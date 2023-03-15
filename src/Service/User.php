<?php

namespace App\Service;

class User
{


    public function __construct(
            private ?string $name = null,
            private ?string $surname= null,
            private ?string $patronymic= null,
            private ?string $email= null,
            private ?string $login= null,
            private ?string $password= null
    )
    {

    }


    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }


    public function getSurname(): ?string
    {
        return $this->surname;
    }


    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }



    public function getPatronymic(): ?string
    {
        return $this->patronymic;
    }


    public function setPatronymic(?string $patronymic): self
    {
        $this->patronymic = $patronymic;
        return $this;
    }


    public function getEmail(): ?string
    {
        return $this->email;
    }


    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }


    public function getLogin(): ?string
    {
        return $this->login;
    }


    public function setLogin(?string $login): self
    {
        $this->login = $login;
        return $this;
    }


    public function getPassword(): ?string
    {
        return $this->password;
    }


    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }



}