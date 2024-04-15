<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_user_reser", columns={"id_user_reser"}), @ORM\Index(name="test", columns={"id_reser_event"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_res_event", type="string", length=255, nullable=false)
     */
    private $nomResEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_place_reserv", type="integer", nullable=false)
     */
    private $nbrPlaceReserv;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="id_reser_event", type="integer", nullable=false)
     */
    private $idReserEvent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_reser", type="integer", nullable=true)
     */
    private $idUserReser;

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function getNomResEvent(): ?string
    {
        return $this->nomResEvent;
    }

    public function setNomResEvent(string $nomResEvent): static
    {
        $this->nomResEvent = $nomResEvent;

        return $this;
    }

    public function getNbrPlaceReserv(): ?int
    {
        return $this->nbrPlaceReserv;
    }

    public function setNbrPlaceReserv(int $nbrPlaceReserv): static
    {
        $this->nbrPlaceReserv = $nbrPlaceReserv;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getIdReserEvent(): ?int
    {
        return $this->idReserEvent;
    }

    public function setIdReserEvent(int $idReserEvent): static
    {
        $this->idReserEvent = $idReserEvent;

        return $this;
    }

    public function getIdUserReser(): ?int
    {
        return $this->idUserReser;
    }

    public function setIdUserReser(?int $idUserReser): static
    {
        $this->idUserReser = $idUserReser;

        return $this;
    }


}
