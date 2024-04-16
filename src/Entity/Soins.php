<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Soins
 *
 * @ORM\Table(name="soins")
 * @ORM\Entity(repositoryClass="App\Repository\SoinsRepository")
 * 
 */
class Soins
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_kine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idKine;

    /**
     * @var string
     *
     * @ORM\Column(name="nomcab", type="string", length=50, nullable=false)
     */
    private $nomcab;

    /**
     * @var string
     *
     * @ORM\Column(name="nomkine", type="string", length=50, nullable=false)
     */
    private $nomkine;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    public function getIdKine(): ?int
    {
        return $this->idKine;
    }

    public function getNomcab(): ?string
    {
        return $this->nomcab;
    }

    public function setNomcab(string $nomcab): static
    {
        $this->nomcab = $nomcab;

        return $this;
    }

    public function getNomkine(): ?string
    {
        return $this->nomkine;
    }

    public function setNomkine(string $nomkine): static
    {
        $this->nomkine = $nomkine;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }


}
