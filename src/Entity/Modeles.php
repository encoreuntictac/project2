<?php

namespace App\Entity;

use App\Repository\ModelesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModelesRepository::class)]
class Modeles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $nom = null;

    #[ORM\Column(nullable: true)]
    private ?int $prix = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $accessoires = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $listes_jeux = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?\DateTimeInterface
    {
        return $this->nom;
    }

    public function setNom(\DateTimeInterface $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAccessoires(): ?string
    {
        return $this->accessoires;
    }

    public function setAccessoires(?string $accessoires): self
    {
        $this->accessoires = $accessoires;

        return $this;
    }

    public function getListesJeux(): ?string
    {
        return $this->listes_jeux;
    }

    public function setListesJeux(?string $listes_jeux): self
    {
        $this->listes_jeux = $listes_jeux;

        return $this;
    }
}
