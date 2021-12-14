<?php

namespace App\Entity;

use App\Repository\PhotoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotoRepository::class)
 */
class Photo
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
    private $url;

    /**
     * @ORM\OneToOne(targetEntity=Manga::class, mappedBy="photo", cascade={"persist", "remove"})
     */
    private $manga;

    /**
     * @ORM\OneToOne(targetEntity=Tomes::class, mappedBy="photo", cascade={"persist", "remove"})
     */
    private $tomes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getManga(): ?Manga
    {
        return $this->manga;
    }

    public function setManga(Manga $manga): self
    {
        // set the owning side of the relation if necessary
        if ($manga->getPhoto() !== $this) {
            $manga->setPhoto($this);
        }

        $this->manga = $manga;

        return $this;
    }

    public function getTomes(): ?Tomes
    {
        return $this->tomes;
    }

    public function setTomes(Tomes $tomes): self
    {
        // set the owning side of the relation if necessary
        if ($tomes->getPhoto() !== $this) {
            $tomes->setPhoto($this);
        }

        $this->tomes = $tomes;

        return $this;
    }
}
