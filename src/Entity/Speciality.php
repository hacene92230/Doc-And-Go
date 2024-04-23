<?php

namespace App\Entity;

use App\Repository\SpecialityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpecialityRepository::class)]
class Speciality
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'speciality')]
    private Collection $doctors;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Reason>
     */
    #[ORM\OneToMany(targetEntity: Reason::class, mappedBy: 'speciality')]
    private Collection $reasons;

    public function __construct()
    {
        $this->doctors = new ArrayCollection();
        $this->reasons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    
    /**
     * @return Collection<int, User>
     */
    public function getDoctors(): Collection
    {
        return $this->doctors;
    }

    public function addDoctor(User $doctor): static
    {
        if (!$this->doctors->contains($doctor)) {
            $this->doctors->add($doctor);
            $doctor->setSpeciality($this);
        }

        return $this;
    }

    public function removeDoctor(User $doctor): static
    {
        if ($this->doctors->removeElement($doctor)) {
            // set the owning side to null (unless already changed)
            if ($doctor->getSpeciality() === $this) {
                $doctor->setSpeciality(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Reason>
     */
    public function getReasons(): Collection
    {
        return $this->reasons;
    }

    public function addReason(Reason $reason): static
    {
        if (!$this->reasons->contains($reason)) {
            $this->reasons->add($reason);
            $reason->setSpeciality($this);
        }

        return $this;
    }

    public function removeReason(Reason $reason): static
    {
        if ($this->reasons->removeElement($reason)) {
            // set the owning side to null (unless already changed)
            if ($reason->getSpeciality() === $this) {
                $reason->setSpeciality(null);
            }
        }

        return $this;
    }
}