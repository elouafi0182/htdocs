<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BetaalRepository")
 */
class Betaal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $useid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soort;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $creditcardnr;

    /**
     * @ORM\Column(type="date")
     */
    private $betaaldate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUseid(): ?int
    {
        return $this->useid;
    }

    public function setUseid(int $useid): self
    {
        $this->useid = $useid;

        return $this;
    }

    public function getSoort(): ?string
    {
        return $this->soort;
    }

    public function setSoort(string $soort): self
    {
        $this->soort = $soort;

        return $this;
    }

    public function getCreditcardnr(): ?string
    {
        return $this->creditcardnr;
    }

    public function setCreditcardnr(string $creditcardnr): self
    {
        $this->creditcardnr = $creditcardnr;

        return $this;
    }

    public function getBetaaldate(): ?\DateTimeInterface
    {
        return $this->betaaldate;
    }

    public function setBetaaldate(\DateTimeInterface $betaaldate): self
    {
        $this->betaaldate = $betaaldate;

        return $this;
    }
}
