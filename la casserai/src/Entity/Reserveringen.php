<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReserveringenRepository")
 */
class Reserveringen
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $checkinDate;

    /**
     * @ORM\Column(type="date")
     */
    private $checkoutDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $betaalid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $betaalmethode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCheckinDate(): ?\DateTimeInterface
    {
        return $this->checkinDate;
    }

    public function setCheckinDate(\DateTimeInterface $checkinDate): self
    {
        $this->checkinDate = $checkinDate;

        return $this;
    }

    public function getCheckoutDate(): ?\DateTimeInterface
    {
        return $this->checkoutDate;
    }

    public function setCheckoutDate(\DateTimeInterface $checkoutDate): self
    {
        $this->checkoutDate = $checkoutDate;

        return $this;
    }

    public function getBetaalid(): ?string
    {
        return $this->betaalid;
    }

    public function setBetaalid(string $betaalid): self
    {
        $this->betaalid = $betaalid;

        return $this;
    }

    public function getBetaalmethode(): ?string
    {
        return $this->betaalmethode;
    }

    public function setBetaalmethode(string $betaalmethode): self
    {
        $this->betaalmethode = $betaalmethode;

        return $this;
    }
}
