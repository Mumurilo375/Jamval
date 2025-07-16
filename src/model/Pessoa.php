<?php

namespace Jusce\Doctrine\model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Pessoa
{
    #[Id]
    #[GeneratedValue]
    #[Column]
    private int $id;

    #[Column]
    private string $nome;

    public function __construct(int $id, string $nome)
    {
        $this->id = $id;
        $this->nome = $nome;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}
