<?php

namespace App\Entity;

use App\Repository\SortieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SortieRepository::class)
 */
class Sortie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Category;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $StartTime;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $BackTime;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Place;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $GuideName;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->Category;
    }

    public function setCategory(string $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }

    public function setStartTime(string $StartTime): self
    {
        $this->StartTime = $StartTime;

        return $this;
    }

    public function getBackTime(): ?string
    {
        return $this->BackTime;
    }

    public function setBackTime(string $BackTime): self
    {
        $this->BackTime = $BackTime;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->Place;
    }

    public function setPlace(string $Place): self
    {
        $this->Place = $Place;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getGuideName(): ?string
    {
        return $this->GuideName;
    }

    public function setGuideName(string $GuideName): self
    {
        $this->GuideName = $GuideName;

        return $this;
    }

    public function getDepart(): ?\DateTimeInterface
    {
        return $this->Depart;
    }

    public function setDepart(\DateTimeInterface $Depart): self
    {
        $this->Depart = $Depart;

        return $this;
    }

    public function getArrive(): ?\DateTimeInterface
    {
        return $this->Arrive;
    }

    public function setArrive(\DateTimeInterface $Arrive): self
    {
        $this->Arrive = $Arrive;

        return $this;
    }
}
