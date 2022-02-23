<?php

namespace App\Entity;

use App\Repository\ParticipantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParticipantRepository::class)
 */
class Participant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer" , unique=true)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $FullName;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $Email;

    /**
     * @ORM\Column(type="integer")
     */
    private $PhoneNumber;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $idSortie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->FullName;
    }

    public function setFullName(string $FullName): self
    {
        $this->FullName = $FullName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPhoneNumber(): ?int
    {
        return $this->PhoneNumber;
    }

    public function setPhoneNumber(int $PhoneNumber): self
    {
        $this->PhoneNumber = $PhoneNumber;

        return $this;
    }

    public function getIdSortie(): ?string
    {
        return $this->idSortie;
    }

    public function setIdSortie(string $idSortie): self
    {
        $this->idSortie = $idSortie;

        return $this;
    }
}
