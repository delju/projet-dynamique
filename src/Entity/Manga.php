<?php

namespace App\Entity;

use App\Repository\MangaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=MangaRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Manga
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $originalTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $frenchTitle;

    /**
     * @ORM\Column(type="text")
     */
    private $summary;

    /**
     * @ORM\Column(type="boolean")
     */
    private $anime;

    /**
     * @ORM\Column(type="date")
     * @Gedmo\Timestampable(on="create")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Genre::class, inversedBy="mangas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $genre;

    /**
     * @ORM\ManyToOne(targetEntity=Classification::class, inversedBy="mangas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classification;

    /**
     * @ORM\ManyToOne(targetEntity=Author::class, inversedBy="mangas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;



    /**
     * @ORM\OneToMany(targetEntity=Tomes::class, mappedBy="manga")
     */
    private $tomes;

    /**
     * @ORM\ManyToOne(targetEntity=Statut::class, inversedBy="mangas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity=Editor::class, inversedBy="mangas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $editor;

    /**
     * @ORM\OneToOne(targetEntity=Photo::class, inversedBy="manga", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255)
     * @Gedmo\Slug(fields={"frenchTitle"}, updatable= false)
     */
    private $slug;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="manga", orphanRemoval=true)
     */
    private $comments;

    public function __construct()
    {
        $this->tomes = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOriginalTitle(): ?string
    {
        return $this->originalTitle;
    }

    public function setOriginalTitle(?string $originalTitle): self
    {
        $this->originalTitle = $originalTitle;

        return $this;
    }

    public function getFrenchTitle(): ?string
    {
        return $this->frenchTitle;
    }

    public function setFrenchTitle(string $frenchTitle): self
    {
        $this->frenchTitle = $frenchTitle;

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

    public function getAnime(): ?bool
    {
        return $this->anime;
    }

    public function setAnime(bool $anime): self
    {
        $this->anime = $anime;

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

    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    public function setGenre(?Genre $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getClassification(): ?Classification
    {
        return $this->classification;
    }

    public function setClassification(?Classification $classification): self
    {
        $this->classification = $classification;

        return $this;
    }

    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    public function setAuthor(?Author $author): self
    {
        $this->author = $author;

        return $this;
    }


    /**
     * @return Collection|Tomes[]
     */
    public function getTomes(): Collection
    {
        return $this->tomes;
    }

    public function addTome(Tomes $tome): self
    {
        if (!$this->tomes->contains($tome)) {
            $this->tomes[] = $tome;
            $tome->setManga($this);
        }

        return $this;
    }

    public function removeTome(Tomes $tome): self
    {
        if ($this->tomes->removeElement($tome)) {
            // set the owning side to null (unless already changed)
            if ($tome->getManga() === $this) {
                $tome->setManga(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->frenchTitle;
    }

    public function getStatut(): ?Statut
    {
        return $this->statut;
    }

    public function setStatut(?Statut $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getEditor(): ?Editor
    {
        return $this->editor;
    }

    public function setEditor(?Editor $editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function setPhoto(Photo $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @ORM\PrePersist
     */

    public function prePersist(): void {
        $this->date = new \DateTime();
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setManga($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getManga() === $this) {
                $comment->setManga(null);
            }
        }

        return $this;
    }
}

