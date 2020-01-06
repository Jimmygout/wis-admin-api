<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ObjetPerduRepository")
 */
class ObjetPerdu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuTrouve;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuActuel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $informationSupp;

    /**
     * @ORM\Column(type="boolean")
     */
    private $publier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getLieuTrouve(): ?string
    {
        return $this->lieuTrouve;
    }

    public function setLieuTrouve(string $lieuTrouve): self
    {
        $this->lieuTrouve = $lieuTrouve;

        return $this;
    }

    public function getLieuActuel(): ?string
    {
        return $this->lieuActuel;
    }

    public function setLieuActuel(string $lieuActuel): self
    {
        $this->lieuActuel = $lieuActuel;

        return $this;
    }

    public function getInformationSupp(): ?string
    {
        return $this->informationSupp;
    }

    public function setInformationSupp(?string $informationSupp): self
    {
        $this->informationSupp = $informationSupp;

        return $this;
    }

    public function getPublier(): ?bool
    {
        return $this->publier;
    }

    public function setPublier(bool $publier): self
    {
        $this->publier = $publier;

        return $this;
    }
}
