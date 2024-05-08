<?php

namespace App\Controller;

use App\Entity\DayWork;
use App\Form\DayWorkType;
use App\Repository\DayWorkRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/day/work')]
class DayWorkController extends AbstractController
{
    #[Route('/', name: 'app_day_work_index', methods: ['GET'])]
    public function index(DayWorkRepository $dayWorkRepository): Response
    {
        return $this->render('day_work/index.html.twig', [
            'day_works' => $dayWorkRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_day_work_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dayWork = new DayWork();
        $form = $this->createForm(DayWorkType::class, $dayWork);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($dayWork);
            $entityManager->flush();

            return $this->redirectToRoute('app_day_work_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('day_work/new.html.twig', [
            'day_work' => $dayWork,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_day_work_show', methods: ['GET'])]
    public function show(DayWork $dayWork): Response
    {
        return $this->render('day_work/show.html.twig', [
            'day_work' => $dayWork,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_day_work_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DayWork $dayWork, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DayWorkType::class, $dayWork);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_day_work_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('day_work/edit.html.twig', [
            'day_work' => $dayWork,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_day_work_delete', methods: ['POST'])]
    public function delete(Request $request, DayWork $dayWork, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dayWork->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($dayWork);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_day_work_index', [], Response::HTTP_SEE_OTHER);
    }
}
