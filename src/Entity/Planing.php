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

    /**
     * @var Collection<int, Appointment>
     */
    #[ORM\OneToMany(targetEntity: Appointment::class, mappedBy: 'planing', orphanRemoval: true)]
    private Collection $appointments;

    #[ORM\ManyToOne(inversedBy: 'planings')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $doctor = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $endDate = null;

    /**
     * @var Collection<int, DayWork>
     */
    #[ORM\OneToMany(targetEntity: DayWork::class, mappedBy: 'planing', orphanRemoval: true, cascade: ['persist'])]
    private Collection $dayWorks;
    
    public function __construct()
    {
        $this->appointments = new ArrayCollection();
        $this->dayWorks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDoctor(): ?User
    {
        return $this->doctor;
    }

    public function setDoctor(?User $doctor): static
    {
        $this->doctor = $doctor;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Collection<int, DayWork>
     */
    public function getDayWorks(): Collection
    {
        return $this->dayWorks;
    }

    public function addDayWork(DayWork $dayWork): static
    {
        if (!$this->dayWorks->contains($dayWork)) {
            $this->dayWorks->add($dayWork);
            $dayWork->setPlaning($this);
        }

        return $this;
    }

    public function removeDayWork(DayWork $dayWork): static
    {
        if ($this->dayWorks->removeElement($dayWork)) {
            // set the owning side to null (unless already changed)
            if ($dayWork->getPlaning() === $this) {
                $dayWork->setPlaning(null);
            }
        }

        return $this;
    }
}
