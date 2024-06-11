<?php

namespace App\Controller;

use App\Entity\Speciality;
use App\Form\SpecialityType;
use App\Repository\SpecialityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/speciality')]
class SpecialityController extends AbstractController
{
    #[Route('/', name: 'app_speciality_index', methods: ['GET'])]
    public function index(SpecialityRepository $specialityRepository): Response
    {
        // Récupérer toutes les spécialités et les trier par ordre alphabétique
        $specialities = $specialityRepository->findBy([], ['name' => 'ASC']);

        // Créer un tableau associatif pour regrouper les spécialités par lettre de l'alphabet
        $specialitiesByLetter = [];
        foreach ($specialities as $speciality) {
            $firstLetter = strtoupper(substr($speciality->getName(), 0, 1));
            $specialitiesByLetter[$firstLetter][] = $speciality;
        }

        return $this->render('speciality/index.html.twig', [
            'specialitiesByLetter' => $specialitiesByLetter,
        ]);
    }

    #[Route('/new', name: 'app_speciality_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $speciality = new Speciality();
        $form = $this->createForm(SpecialityType::class, $speciality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($speciality);
            $entityManager->flush();

            return $this->redirectToRoute('app_speciality_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('speciality/new.html.twig', [
            'speciality' => $speciality,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_speciality_show', methods: ['GET'])]
    public function show(Speciality $speciality): Response
    {
        return $this->render('speciality/show.html.twig', [
            'speciality' => $speciality,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_speciality_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Speciality $speciality, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SpecialityType::class, $speciality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_speciality_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('speciality/edit.html.twig', [
            'speciality' => $speciality,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_speciality_delete', methods: ['POST'])]
    public function delete(Request $request, Speciality $speciality, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$speciality->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($speciality);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_speciality_index', [], Response::HTTP_SEE_OTHER);
    }
}
