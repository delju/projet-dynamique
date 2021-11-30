<?php

namespace App\Entity;

use App\Repository\TomesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TomesRepository::class)
 */
class Tomes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $summary;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="date")
     */
    private $rel_date;

    /**
     * @ORM\ManyToOne(targetEntity=Manga::class, inversedBy="tomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $manga;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getRelDate(): ?\DateTimeInterface
    {
        return $this->rel_date;
    }

    public function setRelDate(\DateTimeInterface $rel_date): self
    {
        $this->rel_date = $rel_date;

        return $this;
    }

    public function getManga(): ?Manga
    {
        return $this->manga;
    }

    public function setManga(?Manga $manga): self
    {
        $this->manga = $manga;

        return $this;
    }

    /**
     * @ORM\PrePersist
     */

    public function prePersis() :void{
        $this->date = new \DateTime();
    }


}

