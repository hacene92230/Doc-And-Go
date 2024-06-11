<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
        ]);
    }

    #[Route('/avantage', name: 'app_avantage')]
    public function avantage(): Response
    {
        return $this->render('home/avantage.html.twig');
    }

    #[Route('/cgu', name: 'app_cgu')]
    public function cgu(): Response
    {
        return $this->render('home/cgu.html.twig');
    }

    #[Route('/formule', name: 'app_formule')]
    public function formule(): Response
    {
        return $this->render('home/formule.html.twig');
    }

    #[Route('/politique', name: 'app_politique')]
    public function politique(): Response
    {
        return $this->render('home/politique.html.twig');
    }

    #[Route('/valeur', name: 'app_valeur')]
    public function valeur(): Response
    {
        return $this->render('home/valeur.html.twig');
    }
}
