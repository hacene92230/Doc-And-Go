<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Repository\StatuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StatusController extends AbstractController
{
    private $statuRepository;

    public function __construct(StatuRepository $statuRepository)
    {
        $this->statuRepository = $statuRepository;
    }

    public function getStatusList(): array
    {
        return $this->statuRepository->findAll();
   }

    #[Route('/{appointment}/edit', name: 'app_status_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Appointment $appointment, EntityManagerInterface $entityManager): Response
    {
        $appointment->setStatu($this->statuRepository->findOneBy(["name" => $request->request->get('status')]));
        $entityManager->flush();
        $this->addFlash('success', 'La modification du statu à été effectuer avec succès.');
            return $this->redirectToRoute('app_appointment_all', [], Response::HTTP_SEE_OTHER);
        }
    }
