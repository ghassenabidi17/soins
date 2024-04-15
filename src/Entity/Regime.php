<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regime
 *
 * @ORM\Table(name="regime")
 * @ORM\Entity
 */
class Regime
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="petitdej", type="string", length=255, nullable=false)
     */
    private $petitdej;

    /**
     * @var string
     *
     * @ORM\Column(name="colpdej", type="string", length=255, nullable=false)
     */
    private $colpdej;

    /**
     * @var string
     *
     * @ORM\Column(name="dej", type="string", length=255, nullable=false)
     */
    private $dej;

    /**
     * @var string
     *
     * @ORM\Column(name="coldej", type="string", length=255, nullable=false)
     */
    private $coldej;

    /**
     * @var string
     *
     * @ORM\Column(name="diner", type="string", length=255, nullable=false)
     */
    private $diner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPetitdej(): ?string
    {
        return $this->petitdej;
    }

    public function setPetitdej(string $petitdej): static
    {
        $this->petitdej = $petitdej;

        return $this;
    }

    public function getColpdej(): ?string
    {
        return $this->colpdej;
    }

    public function setColpdej(string $colpdej): static
    {
        $this->colpdej = $colpdej;

        return $this;
    }

    public function getDej(): ?string
    {
        return $this->dej;
    }

    public function setDej(string $dej): static
    {
        $this->dej = $dej;

        return $this;
    }

    public function getColdej(): ?string
    {
        return $this->coldej;
    }

    public function setColdej(string $coldej): static
    {
        $this->coldej = $coldej;

        return $this;
    }

    public function getDiner(): ?string
    {
        return $this->diner;
    }

    public function setDiner(string $diner): static
    {
        $this->diner = $diner;

        return $this;
    }


}
