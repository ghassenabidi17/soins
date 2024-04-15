<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="fk_prod", columns={"id_categorie"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_prod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProd;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_prod", type="string", length=255, nullable=false)
     */
    private $nomProd;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_prod", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixProd;

    /**
     * @var string
     *
     * @ORM\Column(name="description_prod", type="string", length=255, nullable=false)
     */
    private $descriptionProd;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_prod", type="integer", nullable=false)
     */
    private $quantiteProd;

    /**
     * @var string
     *
     * @ORM\Column(name="image_prod", type="string", length=255, nullable=false)
     */
    private $imageProd;

    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     */
    private $idCategorie;

    public function getIdProd(): ?int
    {
        return $this->idProd;
    }

    public function getNomProd(): ?string
    {
        return $this->nomProd;
    }

    public function setNomProd(string $nomProd): static
    {
        $this->nomProd = $nomProd;

        return $this;
    }

    public function getPrixProd(): ?float
    {
        return $this->prixProd;
    }

    public function setPrixProd(float $prixProd): static
    {
        $this->prixProd = $prixProd;

        return $this;
    }

    public function getDescriptionProd(): ?string
    {
        return $this->descriptionProd;
    }

    public function setDescriptionProd(string $descriptionProd): static
    {
        $this->descriptionProd = $descriptionProd;

        return $this;
    }

    public function getQuantiteProd(): ?int
    {
        return $this->quantiteProd;
    }

    public function setQuantiteProd(int $quantiteProd): static
    {
        $this->quantiteProd = $quantiteProd;

        return $this;
    }

    public function getImageProd(): ?string
    {
        return $this->imageProd;
    }

    public function setImageProd(string $imageProd): static
    {
        $this->imageProd = $imageProd;

        return $this;
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(int $idCategorie): static
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }


}
