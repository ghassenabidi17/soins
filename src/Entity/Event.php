<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEvent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevent;

    /**
     * @var string
     *
     * @ORM\Column(name="NomEvent", type="string", length=255, nullable=false)
     */
    private $nomevent;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="organisateur", type="string", length=255, nullable=false)
     */
    private $organisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Date_deb", type="string", length=250, nullable=true)
     */
    private $dateDeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Date_fin", type="string", length=250, nullable=true)
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="Capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Image", type="blob", length=65535, nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Path", type="string", length=800, nullable=true)
     */
    private $path;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_place_res", type="integer", nullable=true)
     */
    private $nbPlaceRes;

    public function getIdevent(): ?int
    {
        return $this->idevent;
    }

    public function getNomevent(): ?string
    {
        return $this->nomevent;
    }

    public function setNomevent(string $nomevent): static
    {
        $this->nomevent = $nomevent;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getOrganisateur(): ?string
    {
        return $this->organisateur;
    }

    public function setOrganisateur(string $organisateur): static
    {
        $this->organisateur = $organisateur;

        return $this;
    }

    public function getDateDeb(): ?string
    {
        return $this->dateDeb;
    }

    public function setDateDeb(?string $dateDeb): static
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    public function setDateFin(?string $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getNbPlaceRes(): ?int
    {
        return $this->nbPlaceRes;
    }

    public function setNbPlaceRes(?int $nbPlaceRes): static
    {
        $this->nbPlaceRes = $nbPlaceRes;

        return $this;
    }


}
