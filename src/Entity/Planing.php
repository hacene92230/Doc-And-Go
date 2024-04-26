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


    /**
     * @var Collection<int, Appointment>
     */
    #[ORM\OneToMany(targetEntity: Appointment::class, mappedBy: 'planing', orphanRemoval: true)]
    private Collection $appointments;

    #[ORM\Column]
    private array $weekendStatus = [];

    #[ORM\Column]
    private array $closedDates = [];

    #[ORM\Column]
    private array $openinghours = [];

    #[ORM\Column]
    private array $specialdates = [];

    #[ORM\Column]
    private array $defaultopeningtime = [];

    #[ORM\Column]
    private array $defaultclosingtime = [];

    #[ORM\Column]
    private array $weekendclosed = [];

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

    public function getWeekendStatus(): array
    {
        return $this->weekendStatus;
    }

    public function setWeekendStatus(array $weekendStatus): static
    {
        $this->weekendStatus = $weekendStatus;

        return $this;
    }

    public function getClosedDates(): array
    {
        return $this->closedDates;
    }

    public function setClosedDates(array $closedDates): static
    {
        $this->closedDates = $closedDates;

        return $this;
    }

    public function getOpeninghours(): array
    {
        return $this->openinghours;
    }

    public function setOpeninghours(array $openinghours): static
    {
        $this->openinghours = $openinghours;

        return $this;
    }

    public function getSpecialdates(): array
    {
        return $this->specialdates;
    }

    public function setSpecialdates(array $specialdates): static
    {
        $this->specialdates = $specialdates;

        return $this;
    }

    public function getDefaultopeningtime(): array
    {
        return $this->defaultopeningtime;
    }

    public function setDefaultopeningtime(array $defaultopeningtime): static
    {
        $this->defaultopeningtime = $defaultopeningtime;

        return $this;
    }

    public function getDefaultclosingtime(): array
    {
        return $this->defaultclosingtime;
    }

    public function setDefaultclosingtime(array $defaultclosingtime): static
    {
        $this->defaultclosingtime = $defaultclosingtime;

        return $this;
    }

    public function getWeekendclosed(): array
    {
        return $this->weekendclosed;
    }

    public function setWeekendclosed(array $weekendclosed): static
    {
        $this->weekendclosed = $weekendclosed;

        return $this;
    }
}
