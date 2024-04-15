<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="cleuser", columns={"id_user"}), @ORM\Index(name="cleevent", columns={"id_evenement"}), @ORM\Index(name="cle", columns={"id_user"}), @ORM\Index(name="cleprod", columns={"id_prod"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="type_reclamation", type="string", length=0, nullable=false)
     */
    private $typeReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_reclamation", type="string", length=255, nullable=false)
     */
    private $contenuReclamation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_evenement", type="integer", nullable=false)
     */
    private $idEvenement;

    /**
     * @var int
     *
     * @ORM\Column(name="id_prod", type="integer", nullable=false)
     */
    private $idProd;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_reclamation", type="string", length=50, nullable=false)
     */
    private $statutReclamation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reclamation", type="date", nullable=false)
     */
    private $dateReclamation;

    public function getIdReclamation(): ?int
    {
        return $this->idReclamation;
    }

    public function getTypeReclamation(): ?string
    {
        return $this->typeReclamation;
    }

    public function setTypeReclamation(string $typeReclamation): static
    {
        $this->typeReclamation = $typeReclamation;

        return $this;
    }

    public function getContenuReclamation(): ?string
    {
        return $this->contenuReclamation;
    }

    public function setContenuReclamation(string $contenuReclamation): static
    {
        $this->contenuReclamation = $contenuReclamation;

        return $this;
    }

    public function getIdEvenement(): ?int
    {
        return $this->idEvenement;
    }

    public function setIdEvenement(int $idEvenement): static
    {
        $this->idEvenement = $idEvenement;

        return $this;
    }

    public function getIdProd(): ?int
    {
        return $this->idProd;
    }

    public function setIdProd(int $idProd): static
    {
        $this->idProd = $idProd;

        return $this;
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

    public function getStatutReclamation(): ?string
    {
        return $this->statutReclamation;
    }

    public function setStatutReclamation(string $statutReclamation): static
    {
        $this->statutReclamation = $statutReclamation;

        return $this;
    }

    public function getDateReclamation(): ?\DateTimeInterface
    {
        return $this->dateReclamation;
    }

    public function setDateReclamation(\DateTimeInterface $dateReclamation): static
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }


}
