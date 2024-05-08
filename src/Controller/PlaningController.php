<?php

namespace App\Controller;

use App\Entity\Planing;
use App\Form\PlaningType;
use App\Repository\PlaningRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/planing')]
class PlaningController extends AbstractController
{
    #[Route('/', name: 'app_planing_index', methods: ['GET'])]
    public function index(PlaningRepository $planingRepository): Response
    {
        return $this->render('planing/index.html.twig', [
            'planings' => $planingRepository->findBy(["doctor" => $this->getUser()]),
        ]);
    }

    #[Route('/new', name: 'app_planing_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $planing = new Planing();
        $form = $this->createForm(PlaningType::class, $planing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $planing->setDoctor($this->getUser());

            $entityManager->persist($planing);
            $entityManager->flush();

            return $this->redirectToRoute('app_planing_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('planing/new.html.twig', [
            'planing' => $planing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_planing_show', methods: ['GET'])]
    public function show(Planing $planing): Response
    {
        return $this->render('planing/show.html.twig', [
            'planing' => $planing,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_planing_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Planing $planing, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PlaningType::class, $planing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_planing_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('planing/edit.html.twig', [
            'planing' => $planing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_planing_delete', methods: ['POST'])]
    public function delete(Request $request, Planing $planing, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$planing->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($planing);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_planing_index', [], Response::HTTP_SEE_OTHER);
    }
}
