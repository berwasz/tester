<?php

namespace App\Entity;

use App\Repository\TekstyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TekstyRepository::class)]
class Teksty
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tytul = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $tresc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTytul(): ?string
    {
        return $this->tytul;
    }

    public function setTytul(?string $tytul): static
    {
        $this->tytul = $tytul;

        return $this;
    }

    public function getTresc(): ?string
    {
        return $this->tresc;
    }

    public function setTresc(?string $tresc): static
    {
        $this->tresc = $tresc;

        return $this;
    }
}
