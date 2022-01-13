<?php

namespace App\Entity;

use App\Repository\CollectionUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CollectionUserRepository::class)
 */
class CollectionUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="collectionUser", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Tomes::class, mappedBy="collectionUser")
     */
    private $tomes;

    public function __construct()
    {
        $this->tomes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

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
            $tome->setCollectionUser($this);
        }

        return $this;
    }

    public function removeTome(Tomes $tome): self
    {
        if ($this->tomes->removeElement($tome)) {
            // set the owning side to null (unless already changed)
            if ($tome->getCollectionUser() === $this) {
                $tome->setCollectionUser(null);
            }
        }

        return $this;
    }
}
