<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=255, nullable=false)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=255, nullable=false)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user", type="string", length=255, nullable=false)
     */
    private $emailUser;

    /**
     * @var string
     *
     * @ORM\Column(name="password_user", type="string", length=255, nullable=false)
     */
    private $passwordUser;

    /**
     * @var string
     *
     * @ORM\Column(name="role_user", type="string", length=255, nullable=false)
     */
    private $roleUser;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_sportif", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidsSportif;

    /**
     * @var float
     *
     * @ORM\Column(name="taille_sportif", type="float", precision=10, scale=0, nullable=false)
     */
    private $tailleSportif;

    /**
     * @var int
     *
     * @ORM\Column(name="disponibilite_conseiller", type="integer", nullable=false)
     */
    private $disponibiliteConseiller;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): static
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): static
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    public function getEmailUser(): ?string
    {
        return $this->emailUser;
    }

    public function setEmailUser(string $emailUser): static
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    public function getPasswordUser(): ?string
    {
        return $this->passwordUser;
    }

    public function setPasswordUser(string $passwordUser): static
    {
        $this->passwordUser = $passwordUser;

        return $this;
    }

    public function getRoleUser(): ?string
    {
        return $this->roleUser;
    }

    public function setRoleUser(string $roleUser): static
    {
        $this->roleUser = $roleUser;

        return $this;
    }

    public function getPoidsSportif(): ?float
    {
        return $this->poidsSportif;
    }

    public function setPoidsSportif(float $poidsSportif): static
    {
        $this->poidsSportif = $poidsSportif;

        return $this;
    }

    public function getTailleSportif(): ?float
    {
        return $this->tailleSportif;
    }

    public function setTailleSportif(float $tailleSportif): static
    {
        $this->tailleSportif = $tailleSportif;

        return $this;
    }

    public function getDisponibiliteConseiller(): ?int
    {
        return $this->disponibiliteConseiller;
    }

    public function setDisponibiliteConseiller(int $disponibiliteConseiller): static
    {
        $this->disponibiliteConseiller = $disponibiliteConseiller;

        return $this;
    }


}
