<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_categorie", type="string", length=255, nullable=false)
     */
    private $nomCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="description_categorie", type="string", length=255, nullable=false)
     */
    private $descriptionCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="type_categorie", type="string", length=255, nullable=false)
     */
    private $typeCategorie;

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nomCategorie;
    }

    public function setNomCategorie(string $nomCategorie): static
    {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }

    public function getDescriptionCategorie(): ?string
    {
        return $this->descriptionCategorie;
    }

    public function setDescriptionCategorie(string $descriptionCategorie): static
    {
        $this->descriptionCategorie = $descriptionCategorie;

        return $this;
    }

    public function getTypeCategorie(): ?string
    {
        return $this->typeCategorie;
    }

    public function setTypeCategorie(string $typeCategorie): static
    {
        $this->typeCategorie = $typeCategorie;

        return $this;
    }


}
