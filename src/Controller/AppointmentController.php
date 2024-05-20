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

#[Route('/all', name: 'app_appointment_all', methods: ['GET'])]
public function all(AppointmentRepository $appointmentRepository): Response
{
    // Récupérer l'utilisateur connecté
    $user = $this->getUser();

    // Vérifier si l'utilisateur est un médecin
    if ($this->isGranted('ROLE_DOCTOR')) {
        // Récupérer les planings de l'utilisateur
        $planings = $user->getPlanings();

        // Initialise un tableau pour stocker tous les rendez-vous
        $allAppointments = [];

        // Parcourir les planings pour récupérer les rendez-vous de chaque planing
        foreach ($planings as $planing) {
            $appointments = $planing->getAppointments();
            // Fusionner les rendez-vous dans un seul tableau
            $allAppointments = array_merge($allAppointments, $appointments->toArray());
        }

        return $this->render('appointment/all.html.twig', [
            'appointments' => $allAppointments,
        ]);
    }

    // Redirection ou traitement si l'utilisateur n'est pas un médecin
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
}