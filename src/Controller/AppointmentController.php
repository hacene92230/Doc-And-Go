<?php

namespace App\Controller;

use DateTime;
use DateInterval;
use App\Entity\User;
use App\Entity\Reason;
use App\Entity\Appointment;
use App\Form\AppointmentType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AppointmentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/appointment')]
class AppointmentController extends AbstractController
{
    #[Route('/', name: 'app_appointment_index', methods: ['GET'])]
    public function index(AppointmentRepository $appointmentRepository): Response
    {
        return $this->render('appointment/index.html.twig', [
            'appointments' => $appointmentRepository->findBy(["user" => $this->getUser()]),
        ]);
    }

// src/Controller/AppointmentController.php

#[Route('/new/{doctor}', name: 'app_appointment_new', methods: ['GET', 'POST'])]
public function new(User $doctor, Request $request, EntityManagerInterface $entityManager): Response
{
    $appointment = new Appointment();
    $form = $this->createForm(AppointmentType::class, $appointment);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $appointment->setStatus("confirmer");
        $dateSelected = $form->getData()->getDateTime();
        $dateOnly = $dateSelected->format('Y-m-d');
        
        $dayWorkFound = null;
        foreach ($doctor->getPlanings() as $planing) {
            foreach ($planing->getDayWorks() as $dayWork) {
                if ($dayWork->getDate()->format('Y-m-d') === $dateOnly) {
                    $dayWorkFound = $dayWork;
                    $appointment->setPlaning($dayWork->getPlaning());
                    $appointment->setUser($this->getUser());
                    break 2; // Sortir des deux boucles
                }
            }
        }

        if ($dayWorkFound !== null) {
            // Si un DayWork correspondant est trouvé, continuez
            $entityManager->persist($appointment);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        } else {
            // Si aucun DayWork correspondant n'est trouvé, vous pouvez gérer ce cas
            $this->addFlash('error', 'Aucun créneau disponible pour cette date.');
        }
    }

    // Récupérer les créneaux déjà réservés pour chaque planing
    $reservedSlots = [];
    foreach ($doctor->getPlanings() as $planing) {
        foreach ($planing->getAppointments() as $existingAppointment) {
            $reservedSlots[] = $existingAppointment->getDateTime()->format('Y-m-d H:i');
        }
    }

    return $this->render('appointment/new.html.twig', [
        'form' => $form->createView(),
        'planings' => $doctor->getPlanings(),
        'reservedSlots' => $reservedSlots,
    ]);
}

        #[Route('/{id}', name: 'app_appointment_show', methods: ['GET'])]
    public function show(Appointment $appointment): Response
    {
        return $this->render('appointment/show.html.twig', [
            'appointment' => $appointment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_appointment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Appointment $appointment, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_appointment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('appointment/edit.html.twig', [
            'appointment' => $appointment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_appointment_delete', methods: ['POST'])]
    public function delete(Request $request, Appointment $appointment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appointment->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($appointment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_appointment_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/creneaux/{doctor}', name: 'app_available_slots', methods: ['GET'])]
    public function availableSlots(User $doctor, EntityManagerInterface $entityManager, AppointmentRepository $appointment): Response
    {
        $planningData = [];
    
        foreach ($doctor->getPlanings() as $planning) {
            $availableSlots = [];
            $startDate = $planning->getStartDate()->format('Y-m-d');
            $endDate = $planning->getEndDate()->format('Y-m-d');
            $startTime = $planning->getStartTime()->format('H:i');
            $endTime = $planning->getEndTime()->format('H:i');
    
            $currentDate = clone $planning->getStartDate();
            $endDate = clone $planning->getEndDate();
    
            while ($currentDate <= $endDate) {
                $slotStartDate = $currentDate->format('Y-m-d');
                $slotStartTime = max($currentDate, $planning->getStartTime());
                $slotEndTime = min((clone $slotStartTime)->setTime($planning->getEndTime()->format('H'), $planning->getEndTime()->format('i')), $endDate);
    
                while ($slotStartTime < $slotEndTime) {
                    $availableSlots[] = [
                        'startDate' => $slotStartDate,
                        'startTime' => $slotStartTime->format('H:i'),
                        'endTime' => $slotStartTime->add(new DateInterval('PT30M'))->format('H:i'),
                    ];
                }
    
                $currentDate->modify('+1 day');
            }
    
            $planningData[] = [
                'startDate' => $startDate,
                'endDate' => $endDate,
                'startTime' => $startTime,
                'endTime' => $endTime,
                'slots' => $availableSlots,
            ];
        }
    
        return $this->json($planningData);
    }
    
}