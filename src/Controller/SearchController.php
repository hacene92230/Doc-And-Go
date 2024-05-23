<?php
namespace App\Controller;

use App\Form\SearchType;
use App\Entity\Speciality;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/search')]
class SearchController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_search_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $form = $this->createForm(SearchType::class);

        return $this->render('search/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/new', name: 'app_search_new', methods: ['POST'])]
    public function new(Request $request): Response
    {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(['error' => 'Requête invalide.'], Response::HTTP_BAD_REQUEST);
        }
    
        $data = json_decode($request->getContent(), true);
        $searchTerm = $data['searchField'] ?? '';
    
        if (empty($searchTerm) || strlen($searchTerm) < 4) {
            return new JsonResponse(['error' => 'Le terme de recherche doit comporter au moins 4 caractères.'], Response::HTTP_BAD_REQUEST);
        }
    
        try {
            $query = $this->entityManager->createQueryBuilder()
                ->select('s.name', 's.id')
                ->from(Speciality::class, 's')
                ->where('s.name LIKE :term')
                ->setParameter('term', '%' . $searchTerm . '%')
                ->getQuery();
    
            $results = $query->getResult();
    
            // Formater les résultats pour inclure l'ID
            $formattedResults = [];
            foreach ($results as $result) {
                $formattedResults[] = [
                    'id' => $result['id'],
                    'name' => $result['name']
                ];
            }
    
            return new JsonResponse($formattedResults);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Une erreur est survenue lors de la recherche.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    }
