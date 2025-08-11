<?php

namespace App\Controller;

use DateTime;
use DateInterval;
use App\Entity\User;
use App\Entity\Reason;
use App\Entity\Appointment;
use App\Enum\AppointmentStatus;
use App\Form\AppointmentType;
use App\Service\AppointmentService;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AppointmentRepository;
use App\Repository\StatuRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/appointment')]
class AppointmentController extends AbstractController
{

    #[Route('/show/{user}', name: 'app_appointment_show', methods: ['GET'])]
    public function show(User $user, AppointmentRepository $appointmentRepository): Response
    {
        $appointments = $appointmentRepository->findBy(["user" => $user]);
        return $this->render('appointment/show.html.twig', [
            'appointments' => $appointments,
        ]);
    }

#[Route('/new/{doctor}', name: 'app_appointment_new', methods: ['GET', 'POST'])]
public function new(User $doctor, Request $request, AppointmentService $appointmentService): Response
{
    $appointment = new Appointment();
    $form = $this->createForm(AppointmentType::class, $appointment);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var User $patient */
        $patient = $this->getUser();
        $success = $appointmentService->createAppointment($appointment, $doctor, $patient);

        if ($success) {
            $this->addFlash('success', 'Rendez-vous confirmé avec succès, les informations vous serons envoyer par email.');
            return $this->redirectToRoute('app_home');
        } else {
            $this->addFlash('error', 'Aucun créneau disponible pour cette date ou ce statut n\'existe pas.');
        }
    }

    // The logic to get reserved slots for display can also be moved to a service later.
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
public function all(AppointmentRepository $appointmentRepository, StatuRepository $statuRepository): Response
{
    $user = $this->getUser();
    $allAppointments = [];

    // For a doctor, fetch all appointments linked to their planings.
    if ($this->isGranted('ROLE_DOCTOR')) {
        $allAppointments = $appointmentRepository->findByDoctor($user);
    }

    return $this->render('appointment/all.html.twig', [
        'appointments' => $allAppointments,
        "statusList" => $statuRepository->findAll(),
    ]);
}

    #[Route('/{id}', name: 'app_appointment_delete', methods: ['POST'])]
    public function delete(Request $request, Appointment $appointment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appointment->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($appointment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }
}