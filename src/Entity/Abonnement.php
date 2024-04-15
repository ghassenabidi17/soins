<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement")
 * @ORM\Entity(repositoryClass="App\Repository\AbonnementRepository")
 * 
 */
class Abonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ab", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAb;

    /**
     * @var string
     *
     * @ORM\Column(name="nomprenom", type="string", length=50, nullable=false)
     */
    private $nomprenom;

    /**
     * @var string
     *
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="nbplace", type="integer", nullable=false)
     */
    private $nbplace;

    /**
     * @var int
     *
     * @ORM\Column(name="id_kine", type="integer", nullable=false)
     * 
     */
    private $idKine;

    public function getIdAb(): ?int
    {
        return $this->idAb;
    }

    public function getNomprenom(): ?string
    {
        return $this->nomprenom;
    }

    public function setNomprenom(string $nomprenom): static
    {
        $this->nomprenom = $nomprenom;

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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getNbplace(): ?int
    {
        return $this->nbplace;
    }

    public function setNbplace(int $nbplace): static
    {
        $this->nbplace = $nbplace;

        return $this;
    }

    public function getIdKine(): ?int
    {
        return $this->idKine;
    }

    public function setIdKine(int $idKine): static
    {
        $this->idKine = $idKine;

        return $this;
    }


}
