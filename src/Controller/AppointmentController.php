<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Reason;
use App\Entity\Appointment;
use App\Form\AppointmentType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AppointmentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/appointment')]
class AppointmentController extends AbstractController
{
    #[Route('/', name: 'app_appointment_index', methods: ['GET'])]
    public function index(AppointmentRepository $appointmentRepository): Response
    {
        return $this->render('appointment/index.html.twig', [
            'appointments' => $appointmentRepository->findAll(),
        ]);
    }

    #[Route('/new/{doctor}', name: 'app_appointment_new', methods: ['GET', 'POST'])]
    public function new(User $doctor, Request $request, EntityManagerInterface $entityManager): Response
    {
        $appointment = new Appointment();
        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $dateTime = $appointment->getDateTime();
            $appointment->setStatus("confirmer");
    
            foreach ($doctor->getPlanings() as $planning) {
                if ($dateTime >= $planning->getStartDate() && $dateTime <= $planning->getEndDate()) {
                    $isDateAvailable = true;
                    foreach ($planning->getAppointments() as $existingAppointment) {
                        if ($existingAppointment->getDateTime() == $dateTime) {
                            $isDateAvailable = false;
                                                        break; // Sortir de la boucle si la date est déjà prise
                        }
                    }
                    
                    // Si la date est disponible, associer le planning correspondant
                    if ($isDateAvailable) {
                        $appointment->setPlaning($planning);
                        break; // Sortir de la boucle foreach une fois que le planning est associé
                    }
                    else {
                        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
                    }  
                    }
                }
            

            $entityManager->persist($appointment);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_appointment_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('appointment/new.html.twig', [
            'form' => $form,
            'doctor' => $doctor,
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
}
