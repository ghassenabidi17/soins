<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="fk_produit", columns={"id_prod"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_panier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPanier;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var float
     *
     * @ORM\Column(name="total_panier", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalPanier;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_panier", type="integer", nullable=false)
     */
    private $quantitePanier;

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
     * @ORM\Column(name="image_prod", type="string", length=255, nullable=false)
     */
    private $imageProd;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prod", referencedColumnName="id_prod")
     * })
     */
    private $idProd;

    public function getIdPanier(): ?int
    {
        return $this->idPanier;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getTotalPanier(): ?float
    {
        return $this->totalPanier;
    }

    public function setTotalPanier(float $totalPanier): static
    {
        $this->totalPanier = $totalPanier;

        return $this;
    }

    public function getQuantitePanier(): ?int
    {
        return $this->quantitePanier;
    }

    public function setQuantitePanier(int $quantitePanier): static
    {
        $this->quantitePanier = $quantitePanier;

        return $this;
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

    public function getImageProd(): ?string
    {
        return $this->imageProd;
    }

    public function setImageProd(string $imageProd): static
    {
        $this->imageProd = $imageProd;

        return $this;
    }

    public function getIdProd(): ?Produit
    {
        return $this->idProd;
    }

    public function setIdProd(?Produit $idProd): static
    {
        $this->idProd = $idProd;

        return $this;
    }


}
