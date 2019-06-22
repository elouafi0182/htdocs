<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SoortRepository")
 */
class Soort
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="integer")
     */
    private $meerprijs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Kamer", mappedBy="soort")
     */
    private $kamer_soort;

    public function __construct()
    {
        $this->kamer_soort = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getMeerprijs(): ?int
    {
        return $this->meerprijs;
    }

    public function setMeerprijs(int $meerprijs): self
    {
        $this->meerprijs = $meerprijs;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getOmschrijving() . "\r\n €" .$this->getMeerprijs();
    }

    /**
     * @return Collection|Kamer[]
     */
    public function getKamerSoort(): Collection
    {
        return $this->kamer_soort;
    }

    public function addKamerSoort(Kamer $kamerSoort): self
    {
        if (!$this->kamer_soort->contains($kamerSoort)) {
            $this->kamer_soort[] = $kamerSoort;
            $kamerSoort->setSoort($this);
        }

        return $this;
    }

    public function removeKamerSoort(Kamer $kamerSoort): self
    {
        if ($this->kamer_soort->contains($kamerSoort)) {
            $this->kamer_soort->removeElement($kamerSoort);
            // set the owning side to null (unless already changed)
            if ($kamerSoort->getSoort() === $this) {
                $kamerSoort->setSoort(null);
            }
        }

        return $this;
    }
}
