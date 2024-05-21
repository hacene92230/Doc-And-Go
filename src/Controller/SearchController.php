<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/search')]
class SearchController extends AbstractController
{
    #[Route('/new', name: 'app_search_new', methods: ['GET'])]
    public function new(Request $request): Response
    {
        $form = $this->createForm(SearchType::class);

        return $this->render('search/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/ajax', name: 'app_search_ajax', methods: ['GET'])]
    public function ajaxSearch(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $searchTerm = $request->query->get('searchField');
        if (!$searchTerm) {
            return new JsonResponse([]);
        }

        $queryBuilder = $entityManager->createQueryBuilder();

        $query = $queryBuilder->select('u')
            ->from(User::class, 'u')
            ->leftJoin('u.speciality', 's')
            ->where('u.roles LIKE :role')
            ->andWhere($queryBuilder->expr()->orX(
                $queryBuilder->expr()->like('u.firstName', ':searchTerm'),
                $queryBuilder->expr()->like('u.lastName', ':searchTerm'),
                $queryBuilder->expr()->like('s.name', ':searchTerm')
            ))
            ->setParameter('role', '%"ROLE_Doctor"%')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->getQuery();

        $results = $query->getResult();
        // Log pour débogage
        error_log('Termes de recherche: ' . $searchTerm);
        error_log('Nombre de résultats: ' . count($results));

        // Convert results to array to be sent as JSON response
        $formattedResults = [];
        foreach ($results as $result) {
            $formattedResults[] = [
                'firstName' => $result->getFirstName(),
                'lastName' => $result->getLastName(),
                'specialty' => ($result->getSpecialty()) ? $result->getSpecialty()->getName() : '',
            ];
        }

        return new JsonResponse($formattedResults);
    }
}
