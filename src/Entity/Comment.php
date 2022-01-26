<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $message;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $date;


    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     * @Gedmo\Blameable(on="create")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Manga::class, inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $manga;

    /**
     * @ORM\OneToMany(targetEntity=CommentFlag::class, mappedBy="comment", orphanRemoval=true)
     */
    private $commentFlags;


    public function __construct()
    {
        $this->commentFlags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

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



    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getManga(): string
    {
        return $this->manga;
    }

    public function setManga(Manga $manga): self
    {
        $this->manga = $manga;

        return $this;
    }

    /**
     * @return Collection|CommentFlag[]
     */
    public function getCommentFlags(): Collection
    {
        return $this->commentFlags;
    }

    public function addCommentFlag(CommentFlag $commentFlag): self
    {
        if (!$this->commentFlags->contains($commentFlag)) {
            $this->commentFlags[] = $commentFlag;
            $commentFlag->setComment($this);
        }

        return $this;
    }

    public function removeCommentFlag(CommentFlag $commentFlag): self
    {
        if ($this->commentFlags->removeElement($commentFlag)) {
            // set the owning side to null (unless already changed)
            if ($commentFlag->getComment() === $this) {
                $commentFlag->setComment(null);
            }
        }

        return $this;
    }
}
