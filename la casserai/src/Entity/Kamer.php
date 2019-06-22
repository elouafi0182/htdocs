<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KamerRepository")
 */
class Kamer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $prijs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Soort", inversedBy="kamer_soort")
     */
    private $soort;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Extras", inversedBy="kamers")
     */
    private $extra;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Image", inversedBy="kamer_image")
     */
    private $image;

    public function __construct()
    {
        $this->extra = new ArrayCollection();
        $this->image = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrijs(): ?float
    {
        return $this->prijs;
    }

    public function setPrijs(float $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }

    public function getSoort(): ?Soort
    {
        return $this->soort;
    }

    public function setSoort(?Soort $soort): self
    {
        $this->soort = $soort;

        return $this;
    }

    /**
     * @return Collection|Extras[]
     */
    public function getExtra(): Collection
    {
        return $this->extra;
    }

    public function addExtra(Extras $extra): self
    {
        if (!$this->extra->contains($extra)) {
            $this->extra[] = $extra;
        }

        return $this;
    }

    public function removeExtra(Extras $extra): self
    {
        if ($this->extra->contains($extra)) {
            $this->extra->removeElement($extra);
        }

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    public function addImage(Image $image): self
    {
        if (!$this->image->contains($image)) {
            $this->image[] = $image;
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->image->contains($image)) {
            $this->image->removeElement($image);
        }

        return $this;
    }
}
