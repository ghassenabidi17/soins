<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank(message="Le nom et prénom ne peuvent pas être vides")
     * @Assert\Length(
     *      max = 50,
     *      maxMessage = "Le nom et prénom ne peuvent pas dépasser {{ limit }} caractères"
     * )
     */
    private $nomprenom;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string",columnDefinition="ENUM('male', 'female')")
     * @Assert\Choice(choices={"male", "female"}, message="Le type doit être 'male' ou 'female'")

     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     * @Assert\NotBlank(message="L'âge ne peut pas être vide")
     * @Assert\PositiveOrZero(message="L'âge doit être un nombre positif ")
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="nbplace", type="integer", nullable=false)
     *  @Assert\NotBlank(message="Le nombre de place ne peut pas être vide")
     * @Assert\PositiveOrZero(message="Le nombre de place doit être un nombre positif ")
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