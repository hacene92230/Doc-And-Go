<?php

namespace App\Controller;

use App\Entity\Reason;
use App\Form\ReasonType;
use App\Repository\ReasonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reason')]
class ReasonController extends AbstractController
{
    #[Route('/', name: 'app_reason_index', methods: ['GET'])]
    public function index(ReasonRepository $reasonRepository): Response
    {
        return $this->render('reason/index.html.twig', [
            'reasons' => $reasonRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reason_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reason = new Reason();
        $form = $this->createForm(ReasonType::class, $reason);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reason);
            $entityManager->flush();

            return $this->redirectToRoute('app_reason_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reason/new.html.twig', [
            'reason' => $reason,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reason_show', methods: ['GET'])]
    public function show(Reason $reason): Response
    {
        return $this->render('reason/show.html.twig', [
            'reason' => $reason,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reason_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reason $reason, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReasonType::class, $reason);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reason_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reason/edit.html.twig', [
            'reason' => $reason,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reason_delete', methods: ['POST'])]
    public function delete(Request $request, Reason $reason, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reason->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($reason);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reason_index', [], Response::HTTP_SEE_OTHER);
    }
}
