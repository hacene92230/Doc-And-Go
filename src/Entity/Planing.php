<?php

namespace App\Entity;

use App\Repository\PlaningRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlaningRepository::class)]
class Planing
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(mappedBy: 'planing', cascade: ['persist', 'remove'])]
    private ?User $user = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $dateOf = [];

    /**
     * @var Collection<int, Appointment>
     */
    #[ORM\OneToMany(targetEntity: Appointment::class, mappedBy: 'planing', orphanRemoval: true)]
    private Collection $appointments;

    public function __construct()
    {
        $this->appointments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setPlaning(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getPlaning() !== $this) {
            $user->setPlaning($this);
        }

        $this->user = $user;

        return $this;
    }

    public function getDateOf(): array
    {
        return $this->dateOf;
    }

    public function setDateOf(array $dateOf): static
    {
        $this->dateOf = $dateOf;

        return $this;
    }

    /**
     * @return Collection<int, Appointment>
     */
    public function getAppointments(): Collection
    {
        return $this->appointments;
    }

    public function addAppointment(Appointment $appointment): static
    {
        if (!$this->appointments->contains($appointment)) {
            $this->appointments->add($appointment);
            $appointment->setPlaning($this);
        }

        return $this;
    }

    public function removeAppointment(Appointment $appointment): static
    {
        if ($this->appointments->removeElement($appointment)) {
            // set the owning side to null (unless already changed)
            if ($appointment->getPlaning() === $this) {
                $appointment->setPlaning(null);
            }
        }

        return $this;
    }
}
