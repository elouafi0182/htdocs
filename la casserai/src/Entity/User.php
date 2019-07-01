<?php
// src/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reserveringen", mappedBy="user_id")
     */
    private $reserveringens;

    public function __construct()
    {
        parent::__construct();
        $this->reserveringens = new ArrayCollection();
        // your own logic
    }

    /**
     * @return Collection|Reserveringen[]
     */
    public function getReserveringens(): Collection
    {
        return $this->reserveringens;
    }

    public function addReserveringen(Reserveringen $reserveringen): self
    {
        if (!$this->reserveringens->contains($reserveringen)) {
            $this->reserveringens[] = $reserveringen;
            $reserveringen->setUserId($this);
        }

        return $this;
    }

    public function removeReserveringen(Reserveringen $reserveringen): self
    {
        if ($this->reserveringens->contains($reserveringen)) {
            $this->reserveringens->removeElement($reserveringen);
            // set the owning side to null (unless already changed)
            if ($reserveringen->getUserId() === $this) {
                $reserveringen->setUserId(null);
            }
        }

        return $this;
    }
}