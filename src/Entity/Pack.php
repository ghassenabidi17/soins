<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="pack")
 * @ORM\Entity
 */
class Pack
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pack", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPack;

    /**
     * @var int
     *
     * @ORM\Column(name="id_sportif", type="integer", nullable=false)
     */
    private $idSportif;

    /**
     * @var int
     *
     * @ORM\Column(name="id_coach", type="integer", nullable=false)
     */
    private $idCoach;

    /**
     * @var int
     *
     * @ORM\Column(name="id_nutritionniste", type="integer", nullable=false)
     */
    private $idNutritionniste;

    public function getIdPack(): ?int
    {
        return $this->idPack;
    }

    public function getIdSportif(): ?int
    {
        return $this->idSportif;
    }

    public function setIdSportif(int $idSportif): static
    {
        $this->idSportif = $idSportif;

        return $this;
    }

    public function getIdCoach(): ?int
    {
        return $this->idCoach;
    }

    public function setIdCoach(int $idCoach): static
    {
        $this->idCoach = $idCoach;

        return $this;
    }

    public function getIdNutritionniste(): ?int
    {
        return $this->idNutritionniste;
    }

    public function setIdNutritionniste(int $idNutritionniste): static
    {
        $this->idNutritionniste = $idNutritionniste;

        return $this;
    }


}
