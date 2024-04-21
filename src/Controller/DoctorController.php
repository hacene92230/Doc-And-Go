<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DoctorController extends AbstractController
{
    #[Route('/doctor', name: 'app_doctor')]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('doctor/index.html.twig', [
"doctors" => $userRepository->findByRole("ROLE_DOCTOR")
        ]);
    }

    }