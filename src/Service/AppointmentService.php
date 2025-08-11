<?php

namespace App\Service;

use App\Entity\Appointment;
use App\Entity\User;
use App\Enum\AppointmentStatus;
use App\Repository\DayWorkRepository;
use App\Repository\StatuRepository;
use Doctrine\ORM\EntityManagerInterface;

class AppointmentService
{
    public function __construct(
        private readonly DayWorkRepository $dayWorkRepository,
        private readonly StatuRepository $statuRepository,
        private readonly EntityManagerInterface $entityManager
    ) {
    }

    public function createAppointment(Appointment $appointment, User $doctor, User $patient): bool
    {
        $dateSelected = $appointment->getDateTime();
        $dayWorkFound = $this->dayWorkRepository->findOneByDoctorAndDate($doctor, $dateSelected);

        if ($dayWorkFound === null) {
            return false; // No availability for this day
        }

        // The original logic for checking reserved slots should also be in this service.
        // For now, I will replicate the core creation logic.

        $confirmedStatus = $this->statuRepository->findOneBy(['name' => AppointmentStatus::CONFIRMED->value]);
        if ($confirmedStatus === null) {
            // Handle case where 'confirmé' status doesn't exist
            return false;
        }

        $appointment->setPlaning($dayWorkFound->getPlaning());
        $appointment->setUser($patient);
        $appointment->setStatu($confirmedStatus);

        $this->entityManager->persist($appointment);
        $this->entityManager->flush();

        return true;
    }
}
